<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
     */
    protected function create(array $data)
{
    $avatarName = null;

    if (isset($data['avatar'])) {
        $avatar = $data['avatar'];

        // Kiểm tra xem tệp tồn tại và có thể đọc được
        if (is_file($avatar) && is_readable($avatar)) {
            // Đặt tên cho ảnh dựa trên user id và đuôi mở rộng
            $avatarName = $data['name'] . '.' . $avatar->getClientOriginalExtension();

            // Lưu ảnh vào thư mục storage/app/avatars
            Storage::disk('upload')->put($avatarName, file_get_contents($avatar->getRealPath()));
        } else {
            // Xử lý lỗi khi tệp không tồn tại hoặc không đọc được
            // (ví dụ: thông báo cho người dùng hoặc thực hiện hành động phù hợp)
        }
    }

    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'balance' => 5000,
        'avatar' => $avatarName,
    ]);
}

}
