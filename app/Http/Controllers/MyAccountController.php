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
    public function orders()
    {
        $myOrder = [];
        $myOrder["title"] = "My Orders - Online Store";
        $myOrder["subtitle"] = "My Orders";
        $myOrder["orders"] = Order::with(['items.store'])->where('user_id', Auth::user()->getId())->get();
        return view('my-account.orders')->with("myOrder", $myOrder);
    }
    public function MyProfile()
    {
        $myProfile = [];
    }
    public function showImage($filename)
    {
        $path = storage_path('app/upload/avatar' . $filename);
        return response()->file($path);
    }
    public function setAvatar(USer $user)
    {
        $avatar = new Avatar();
        $avatar->create($user->name)->save(storage_path('app/public/avatars/' . $user->id . '.png'));
        $user->avatar = 'avatars/' . $user->id . '.png';
        $user->save();
        return response()->file($avatar);
    }
}
