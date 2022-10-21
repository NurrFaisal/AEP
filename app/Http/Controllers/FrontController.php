<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function homePage(){
        return view('pages.index');
    }

    public function aboutPage(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function brandPage(){
        return view('pages.brand');
    }
}



