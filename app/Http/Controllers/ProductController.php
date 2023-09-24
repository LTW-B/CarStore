<?php

namespace App\Http\Controllers;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $storeData = [];
        $storeData['title'] = 'Car Shop';
        $storeData['stores'] = Product::get()->sortBy('Name')->all();
        $storeData['selectedResults'] = Product::all();

        return view('Store.index')->with('storeData', $storeData);
    }


    public function filterStores(Request $request)
    {
        $storeData = [];
        $storeData['title'] = 'Store/index';
        $storeData['stores'] = Product::get()->sortBy('Name')->all();
        $selectedCategory = $request->input('selectedCategory');

        if ($selectedCategory && $selectedCategory !== '0') {
        $storeData['selectedResults'] = Product::where('category', array($selectedCategory))->get();
        }else {
            $storeData['selectedResults'] = Product::all();
        }
        return view('Store.index')->with('storeData', $storeData);

    }

   

   

    public function show($id)
    {
        $storeData = [];
        $storeItem = Product::findOrFail($id);
        $storeData["title"] = $storeItem->name;
        $storeData["subtitle"] = $storeItem->name . " information";
        $storeData["storeItem"] = $storeItem;
        $storeData['image'] = $storeItem->image;
        return view('Store.show')->with("storeData", $storeData);
    }

    public function carpartshow($id)
    {
        $linhkienData = [];
        $storeItem = Sanpham::findOrFail($id);
        $linhkienData["title"] = $storeItem->name;
        $linhkienData["subtitle"] = $storeItem->name . " information";
        $linhkienData["storeItem"] = $storeItem;
        $linhkienData['image'] = $storeItem->image;
        return view('home.carpartshow')->with("storeData", $linhkienData);
    }


    public function showImage($filename)
    {
        $path = storage_path('app/ProductImages/' . $filename);
        return response()->file($path);
    }

    public function carpartshowImage($filename)
    {
        $path = storage_path('app/Linhkienimg/' . $filename);
        return response()->file($path);
    }
    public function getSearch(Request $request)
    {
        $searchValue = $request->input('SearchValue');

        if ($searchValue !== null && $searchValue !== '') {
            $product = Product::where('name', 'like', '%' . $searchValue . '%')
                ->orWhere('price', $searchValue)
                ->get();
        } else {
            // Trường hợp SearchValue rỗng, trả về kết quả mặc định "Không có kết quả"
            return back();
        }

        return view('Store.Search')->with('product', $product);
    }

    public function suggest_ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::where('name', 'like', '%' . $request->input('SearchInput') . '%')
                ->orWhere('price', $request->input('SearchInput'))
                ->get();

            if (count($data) > 0) {
                $output = '';
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item">' . $row->name . '</li>';
                }
            } else {
                $output = '<li class="list-group-item">Không tìm thấy sản phẩm</li>';
            }
            return $output;
        }
    }
}
