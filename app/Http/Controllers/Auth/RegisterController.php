<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['required', 'file'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     * @return \Illuminate\Support\Facades\Storage
     */
    protected function create(array $data)
    {
        $avatarName = null;

        if (isset($data['avatar'])) {
            $avatar = $data['avatar'];

            // Đặt tên cho ảnh dựa trên user id và đuôi mở rộng
            $avatarName = $data['email'] . '.' . $avatar->getClientOriginalExtension();

            // Lưu ảnh vào thư mục storage/app/avatars
            Storage::disk('upload')->put($avatarName, file_get_contents($avatar));
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'balance' => 5000,
            'role' => 2,
            'avatar'=> $avatarName,
        ]);
    }

    // function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     $path = 'users/images/';
    //     $fontPath = public_path('fonts/State Secret.ttf');
    //     $char = strtoupper($request->name[0]);
    //     $newAvatarName = rand(12,34353).time().'_avatar.png';
    //     $dest = $path.$newAvatarName;
    //     $createAvatar = makeAvatar($fontPath, $dest, $char);
    //     $avatar = $createAvatar == true ? $newAvatarName : '';
        
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->role = 'client';
    //     $user->avatar = $avatar;
    //     $user->password = Hash::make($request->password);
    //     if ( $user->save()){
    //         return redirect()->back() -> with('success', 'Tạo tài khoản thành công');
    //     }else {
    //         return redirect()->back() -> with('error', 'Tạo tài khoản thất bại');
    //     }
    // }
}
