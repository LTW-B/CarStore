<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function orders()
    {
        $myOrder = [];
        $myOrder["title"] = "My Orders - Online Store";
        $myOrder["subtitle"] = "My Orders";
        $myOrder["orders"] = Order::with(['items.store'])->where('user_id', Auth::user()->getId())->get();
        return view('my-account.orders')->with("myOrder", $myOrder);
    }
}
