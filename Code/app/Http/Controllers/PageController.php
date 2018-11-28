<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homeSite(){
        $title = 'My E-Portfolio';
        return view('welcome')->with('title', $title);
    }

    public function blogPost(){
        $title = 'Blog Post';
        return view('BlogPost')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('About')->with('title', $title);
    }
}
