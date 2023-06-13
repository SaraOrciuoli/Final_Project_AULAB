<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        $announcements = Announcement::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        
        return view('homepage', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view('categories.category_show', compact('category'));
    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);

        return view('announcements.announcements', compact('announcements'));
    }
    public function setLanguage($lang){

        dd($lang);
        session()->put('locale',$lang);
        return redirect()->back();
    }
}
