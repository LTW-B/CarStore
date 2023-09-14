<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravolt\Avatar\Avatar;
use Illuminate\Support\Facades\Storage;

class MyAccountController extends Controller
{
    public function showImage($filename)
    {
        $path = storage_path('app/upload/' . $filename);
        return response()->file($path);
    }
    public function orders()
    {
        $myOrder = [];
        $myOrder["title"] = "My Orders - Online Store";
        $myOrder["subtitle"] = "My Orders";
        $myOrder["orders"] = Order::with(['items.store'])->where('user_id', Auth::user()->id)->get();
        return view('my-account.orders')->with("myOrder", $myOrder);
    }
    public function MyProfile()
    {
        $myProfile = [];
        $profile = Auth::user();
        $myProfile["title"] = "My profile - Online Store";
        $myProfile["subtitle"] = "My Orders";
        $myProfile['profile'] = $profile;
        $myProfile["orders"] = Order::with(['items.store'])->where('user_id', Auth::user()->id)->get();
        // $myProfile['avatarUrl'] = route('showAvatar', ['filename' => $profile->avatar]);
        return view('my-account.profile')->with("myProfile", $myProfile);
    }
}
