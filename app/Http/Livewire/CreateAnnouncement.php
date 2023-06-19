<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\AddWatermarkToImage;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $temporary_images;
    public $images = [];
    public $category;
    public $announcement;

    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required',
        'temporary_images.*' => 'required|image|max:1024',
        'images' => 'required|max:1024',

    ];

    protected $messages = [
        // required
        'title.required' => 'Il campo \'Titolo annuncio\' è richiesto',
        'description.required' => 'Il campo \'Descrizione\' è richiesto',
        'price.required' => 'Il campo \'Prezzo\' è richiesto',
        'category.required' => 'Il campo \'Categoria\' è richiesto',
        'images.required' => 'Il campo \'Immagine\' è richiesto',
        'temporary_images.*.required' => 'Il campo \'Immagine\' è richiesto',
        // min
        'title.min' => 'Il campo \'Titolo annuncio\' è troppo corto',
        'description.min' => 'Il campo \'Descrizione\' è troppo corto',
        // numeric
        'price.numeric' => 'Il campo \'Prezzo\' dev\'essere un numero',
        // image
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.max' => 'L\'immagine dev\'essere massimo di 1mb',

    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }


    public function store()
    {
        $this->validate();

        $this->announcement = Category::find($this->category)->announcements()->create($this->validate());
        if (count($this->images)) {
            foreach ($this->images as $image) {
                $new_file_name = "announcements/{$this->announcement->id}";
                $new_image = $this->announcement->images()->create(['path' => $image->store($new_file_name, 'public')]);

                AddWatermarkToImage::withChain([
                    new RemoveFaces($new_image->id),
                    new ResizeImage($new_image->path, 400, 300),
                    new GoogleVisionSafeSearch($new_image->id),
                    new GoogleVisionLabelImage($new_image->id),

                ])->dispatch(($new_image->id));
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        $this->announcement->user_id = Auth::id();
        $this->announcement->save();

        session()->flash('create_confirmation', 'Il tuo articolo è stato caricato con successo');
        $this->reset();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $this->article->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'temporary_images' => $this->temporary_images,
            'images' => $this->images,
            'category' => $this->category,
        ]);
        return redirect(route('announcements'));
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
