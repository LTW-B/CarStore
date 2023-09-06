<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class AdminStorePageController extends Controller
{
    public function index(){
        $viewAdminData = [];
        $viewAdminData['title'] = 'Admin Store pages';
        $viewAdminData['stores'] = Store::all();
        return view('Admin.Store.index')->with('viewAdminData', $viewAdminData);
    }
    public function CreateNewStore(Request $request){
        $request -> validate([
            'name' => 'required | max: 255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'quantity'=>'required|numeric|gt:0',
            'image' => 'image',
        ]);
        $newStore = new Store();
        $newStore->setName($request->input('name'));
        $newStore->setDescription($request->input('description'));
        $newStore->setPrice($request->input('price'));
        $newStore->setQuantity($request->input('quantity'));
        $newStore->setImage('store.png');
        $newStore->save();
        if ($request->hasFile('image')) {
            $imageName = $newStore->getId() . '.' . $request->file('image')->extension();
            Storage::disk('upload')->put(
                $imageName, 
                file_get_contents($request->file('image')->getRealPath())
            );
            $newStore->setImage($imageName);
            $newStore->save();
        }
        return back();
    }
    public function deleteStore($id){
        Store::destroy($id);
        return back();
    }
    public function editStore($id){
        $storeData =[] ;
        $storeData['title'] = 'Edit Store';
        $storeData['store'] = Store::findOrFail($id);
        return view('Admin.Store.edit') -> with('storeData', $storeData);
    }
    public function updateStore(Request $request, $id) {
        $request -> validate([
            'name' => 'required | max: 255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'quantity'=>'required|numeric|gt:0',
            'image' => 'image',
        ]);
        $updateStore = Store::findOrFail($id);
        $updateStore->setName($request->input('name'));
        $updateStore->setDescription($request->input('description'));
        $updateStore->setPrice($request->input('price'));
        $updateStore->setQuantity($request->input('quantity'));
        if ($request->hasFile('image')) {
            $imageName = $updateStore->getId(). '.' . $request->file('image')->extension();
            Storage::disk('upload')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $updateStore->setImage($imageName);
        }
        $updateStore->save();
        return redirect()->route('admin.store.index');
    }
}
