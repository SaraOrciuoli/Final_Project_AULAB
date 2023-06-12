<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{

    public $title;
    public $description;
    public $price;
    public $category;

    protected $rules = [
        'title' => 'required|min:4',
        'description' => 'required|min:8',
        'price' => 'required|numeric',
        'category' => 'required',
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
    ];

    public function store()
    {
        $this->validate();

        $category = Category::find($this->category);
        
        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        Auth::user()->announcements()->save($announcement);
        
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
