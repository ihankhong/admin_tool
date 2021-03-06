<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = '/';

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
            'nickname' => ['required', 'string', 'max:191'],
            'email'    => ['required', 'string', 'email', 'max:191'],
            'username' => ['required', 'string', 'max:191', 'unique:admins'],
            'password' => ['required', 'string', 'between:6,30', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Admin
     */
    protected function create(array $data)
    {
        return Admin::create([
            'nickname' => $data['nickname'],
            'email'    => $data['email'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'status'   => \AdminStatus::ACTIVE,
        ]);
    }
}
