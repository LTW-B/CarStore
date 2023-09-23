<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;
use App\Models\Product;

class LinhkienController extends Controller
{
    public function index()
    {
        $linhkienData = [];
        $linhkienData['title'] = 'Car Parts';
        $linhkienData['products'] = Sanpham::all();
        $linhkienData['stores'] = Sanpham::get()->sortBy('Name')->all();
        $linhkienData['selectedResults'] = Sanpham::all();
        return view('home.linhkien')->with('linhkienData', $linhkienData);
    }
    
   
    public function showImage($filename) 
    {
        $path = storage_path('app/upload/' . $filename);
        return response()->file($path);
    }
}
