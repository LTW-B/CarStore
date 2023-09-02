<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   

  
    public function home()
    {
        $homeData =[] ;
        $homeData['title'] = 'Best Car Website';
        return view('welcome')->with('homeData', $homeData);
    }
}
