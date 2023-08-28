<?php

namespace App\Http\Controllers\Admin;

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
}
