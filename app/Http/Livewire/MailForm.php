<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailForm extends Component
{
    public $user;
    public $email;
    public $body;

    protected $rules = [
        'user' => 'required|min:3',
        'email' => 'required|email',
        'body' => 'required|min:20'
    ];

    protected $messages = [
        '*.required' => 'Il campo è obbligatorio',

        'user.min' => 'Inserisci almeno 3 caratteri',

        'email.email' => 'Devi inserire un \'email valida',

        'body.min' => 'Il messaggio deve contenere almeno di 20 caratteri',
    ];


    public function send()
    {
        $this->validate();

        $user = $this->user;
        $email = $this->email;
        $body = $this->body;

        $finalMail = new ContactMail($user, $email, $body);

        Mail::to($email)->send($finalMail);

        $this->reset();

        return redirect(route('contact_us'))->with('message', 'Mail inviata correttamente');
    }

    // public function update($propertyName){
    //     $this->validateOnly($propertyName);
    // }


    public function render()
    {
        return view('livewire.mail-form');
    }
}
