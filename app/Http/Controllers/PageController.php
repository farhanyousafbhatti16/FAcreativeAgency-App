<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home() {
        return view('index');
    }


    public function contact() {
        return view('pages.contact');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }


    public function service() {
        return view('pages.service');
    }
    
    


    
}
