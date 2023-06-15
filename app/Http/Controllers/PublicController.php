<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home()
    {

        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();

        return view('homepage', compact('announcements'));
    }

    public function categoryShow(Category $category)
    {
        return view('categories.category_show', compact('category'));
    }

    public function searchAnnouncements(Request $request)
    {
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('announcements.announcements', compact('announcements'));
    }
    public function setLanguage($lang)
    {

        // dd($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function contact_us()
    {
        return view('mail.contact');
    }

    public function send(Request $request)
    {
      
       $user = $request->user; 
       $email = $request->email;
       $body = $request->body;

       $finalMail = new ContactMail($user, $email, $body);

            Mail::to($email)->send($finalMail);

           return redirect(route('contact_us'))->with('message', 'Mail inviata correttamente');
    }
}
