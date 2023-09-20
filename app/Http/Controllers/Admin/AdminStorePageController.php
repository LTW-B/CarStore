<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminStorePageController extends Controller
{
    public function index()
    {
        $viewAdminData = [];
        $viewAdminData['title'] = 'Admin Store pages';
        $viewAdminData['stores'] = Product::all();
        return view('Admin.Store.index')->with('viewAdminData', $viewAdminData);
    }
    public function createNewStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|numeric|gt:0',
            'image' => 'image',
        ]);

        $newStore = new Product();
        $newStore->name = $request->input('name');
        $newStore->description = $request->input('description');
        $newStore->price = $request->input('price');
        $newStore->quantity = $request->input('quantity');
        $newStore->category = $request->input('category');
        $newStore->condition = $request->input('condition');
        $newStore->image = 'store.png';
        $newStore->save();

        if ($request->hasFile('image')) {
            $imageName = $newStore->id . '.' . $request->file('image')->extension();
            Storage::disk('upload')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newStore->image = $imageName;
            $newStore->save();
        }

        return back();
    }
    public function deleteStore($id)
    {
        Product::destroy($id);
        return back();
    }
    public function editStore($id)
    {
        $storeData = [];
        $storeData['title'] = 'Edit Store';
        $storeData['store'] = Product::findOrFail($id);
        return view('Admin.Store.edit')->with('storeData', $storeData);
    }
    public function updateStore(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'gt:0',
            'image' => 'image',
        ]);

        $updateStore = Product::findOrFail($id);
        $updateStore->name = $request->input('name');
        $updateStore->description = $request->input('description');
        $updateStore->price = $request->input('price');
        $updateStore->category = $request->input('category');
        $updateStore->condition = $request->input('condition');
        $updateStore->quantity = $request->input('quantity');

        if ($request->hasFile('image')) {
            $imageName = $updateStore->id . '.' . $request->file('image')->extension();
            Storage::disk('upload')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $updateStore->image = $imageName;
        }

        $updateStore->save();

        return redirect()->route('admin.store.index');
    }
}
