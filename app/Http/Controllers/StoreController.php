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
        $path = storage_path('app/upload/' . $filename);
        return response()->file($path);
    }

    public function getSearch(Request $request)
    {
        $store = Store::where('name', 'like', '%'.$request->SearchValue.'%')
                        ->orWhere('price', $request->SearchValue)
                        ->get();
        return view('Store.Search')->with('store', $store);
    }

    public function suggest_ajax(Request $request){
        $data = $request->all();
        if($data['query']){
            $suggestedStores = Store::where('name', 'like', '%'.$data['query'].'%')->limit(7)->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($suggestedStores as $key){
                $output .= '
                <li><a href="#">'.$key->name.'</a></li>
                ';
            }
            $output .= '</ul>';
            echo $output;
        };
        return response()->json($output);
    }
}
