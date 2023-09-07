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
        $searchValue = $request->input('SearchValue');

        if ($searchValue !== null && $searchValue !== '') {
            $store = Store::where('name', 'like', '%' . $searchValue . '%')
                ->orWhere('price', $searchValue)
                ->get();
        } else {
            // Trường hợp SearchValue rỗng, trả về kết quả mặc định "Không có kết quả"
            $store = ['Không có kết quả'];
        }

        return view('Store.Search')->with('store', $store);
    }


    public function suggest_ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = Store::where('name', 'like', '%' . $request->input('SearchInput') . '%')
                ->orWhere('price', $request->input('SearchInput'))
                ->get();

            if (count($data) > 0) {
                $output = '';
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item">' . $row->name . '</li>';
                }
            } else {
                $output = '<li class="list-group-item">No data found</li>';
            }
            return $output;
        }
    }
}
