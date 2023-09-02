<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinhkienController extends Controller
{
    public function index(){
       $linhkienData =[] ; 
       $linhkienData['title'] = 'Trang Shop';
        return view('home.linhkien')->with('linhkienData'  ,$linhkienData);
    }
}
