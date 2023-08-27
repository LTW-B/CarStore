<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about(){
        $info =[];
        $info['title'] = 'About page';
        return view('home.AboutPage')->with('info', $info);
    }
}
