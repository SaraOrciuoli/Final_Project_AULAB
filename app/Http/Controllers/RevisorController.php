<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        $announcement_checked = Announcement::whereIn('is_accepted', [0,1] )->get();
        // dd($announcement_checked);

        return view('revisor.revisor_index', compact('announcement_to_check','announcement_checked'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', 'Annuncio accettato');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', 'Annuncio rifiutato');
    }

    // public function checkedIndex(){
    //     return view('revisor.revisor_index', compact('announcement_checked'));
    // }
    
    public function undoAnnouncement(Announcement $announcement){
        $announcement->setAccepted(null);
        return redirect()->back()->with('message', 'Operazione annullata');
    }
    
    public function becomeRevisor(){
        Mail::to('admin@admin.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore');
    }
    
    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'Complimenti L\'utente è diventato revisore');
    }
    
}
