<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/home';

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
            'id_card' => ['required', 'string', 'size:13', 'unique:users'],//perm
            'phone' => ['required', 'string', 'size:10', 'unique:users'],//perm
            'img_user' => ['required', 'image'], // เพิ่มการตรวจสอบว่าเป็นไฟล์รูปภาพ
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
        
    $path = null; // กำหนดค่าเริ่มต้นของตัวแปร path

    // ตรวจสอบว่าไฟล์ 'img_user' ถูกอัพโหลดมาหรือไม่
    if (request()->hasFile('img_user')) {
        $imgName = uniqid() . '.' . request()->file('img_user')->getClientOriginalExtension();
        // สมมติว่าคุณเก็บไฟล์ใน storage/app/public/images ซึ่งสามารถเข้าถึงได้ผ่าน public/storage/images
        $path = request()->file('img_user')->storeAs('public/images', $imgName);
    }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_card' => $data['id_card'],//perm
            'phone' => $data['phone'],//perm
            'img_user' => $path, // บันทึกเส้นทางไฟล์รูปภาพ
        ]);
    }
}
