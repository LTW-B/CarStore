<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $storeData = [];
        $storeData['title'] = 'Store/index';
        $storeData['subtitle'] = 'List of stores';
        $storeData['stores'] = Store::all();
        return view('Store.index')->with('storeData', $storeData);
    }
    public function show($id)
    {
        $storeData = [];
        $storeItem = Store::findOrFail($id);
        $storeData["title"] = $storeItem->getName();
        $storeData["subtitle"] = $storeItem->getName() . " information";
        $storeData["storeItem"] = $storeItem;
        $storeData['image'] = $storeItem->getImage();
        return view('Store.show')->with("storeData", $storeData);
    }
    public function showImage($filename) 
    {
        $path = storage_path('app/StoreImage/' . $filename);
        return response()->file($path);
    }
}
