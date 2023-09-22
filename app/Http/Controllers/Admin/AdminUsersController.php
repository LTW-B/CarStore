<?php

namespace App\Http\Controllers\Admin;
use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AdminUsersController extends Controller
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Admin pages';
        $data['users'] =  User::all();
        return view('Admin.UserAccount.index')->with('data', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
            'avatar' => 'required|file',
            'balance' => 'required|numeric|gt:0',
            'role' => 'required|string',
        ]);

        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->password = $request->input('password');
        $newUser->balance = $request->input('balance');
        $newUser->email = $request->input('email');
        $newUser->role = $request->input('role');
        $newUser->avatar = $request->file('avatar')->store('avatars');
        $newUser->save();
        return back();
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return back();
    }
    public function userProfile($id)
    {
        $userInfo = [];
        $userInfo['title'] = 'Edit user';
        $userInfo['user'] = User::findOrFail($id);
        $userInfo["orders"] = Order::with(['items.product'])->where('user_id', User::find($id))->get();
        return view('Admin.UserAccount.userProfile')->with('userInfo', $userInfo);
    }
}
