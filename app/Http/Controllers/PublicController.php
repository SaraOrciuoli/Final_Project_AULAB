<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        $announcements = Announcement::take(6)->orderBy('created_at', 'desc')->get();
        
        return view('homepage', compact('announcements'));
    }

    public function categoryShow(Category $category){
        return view('categories.category_show', compact('category'));
    }
}
