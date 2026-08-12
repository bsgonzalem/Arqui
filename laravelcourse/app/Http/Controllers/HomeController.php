<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View{
        return view('home.index');
    }
    public function contact(){
        $title = "Contact Us - Online Store";
        $subtitle = "Contact Us ";

        return view('home.contact')
            ->with("title", $title)
            ->with("subtitle", $subtitle);
    }
    public function products(){
        return view('product.index');
    }
}
