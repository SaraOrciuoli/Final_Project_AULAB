<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

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
        'temporary_images.*' => 'image|max:1024',
        'images.*' => 'image|max:1024',

    ];

    protected $messages = [
        // required
        'title.required' => 'Il campo \'Titolo annuncio\' è richiesto',
        'description.required' => 'Il campo \'Descrizione\' è richiesto',
        'price.required' => 'Il campo \'Prezzo\' è richiesto',
        'category.required' => 'Il campo \'Categoria\' è richiesto',
        // min
        'title.min' => 'Il campo \'Titolo annuncio\' è troppo corto',
        'description.min' => 'Il campo \'Descrizione\' è troppo corto',
        // numeric
        'price.numeric' => 'Il campo \'Prezzo\' dev\'essere un numero',
        // image
        'temporary_images.*.image' => 'I file devono essere immagini',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 1mb',
        'images.image' => 'L\'immagine dev\'essere un\'immmagine',
        'images.max' => 'L\'immagine dev\'essere massimo di 1mb',

    ];

    public function updatedTemporaryImages(){
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024'
            ])) {
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
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
                $this->announcement->images()->create(['path'=>$image->store('images','public')]);
            }
        }
        $this->announcement->user()->associate(Auth::user());
        
        session()->flash('message','Il tuo articolo è stato caricato con successo');
        $this->reset();
    }
    
    public function updated($propertyName){
        $this->validateOnly($propertyName);

    }
    
    
    


    public function render()
    {
        return view('livewire.create-announcement');
    }
}
