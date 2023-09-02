<?php

namespace App\Http\Controllers;

use App\Models\Sanpham;
use Illuminate\Http\Request;

class LinhkienController extends Controller
{
    public function index()
    {
        $linhkienData = [];
        $linhkienData['title'] = 'Trang Shop';
        $linhkienData['products'] = Sanpham::all();
        return view('home.linhkien')->with('linhkienData', $linhkienData);
    }
    public function showImage($filename) 
    {
        $path = storage_path('app/upload/' . $filename);
        return response()->file($path);
    }
}
