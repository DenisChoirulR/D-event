<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Guest;
use App\Organization;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            //'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if ($data['type'] == 'guest') {
            $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'type' => 'guest'
            ]);

            Guest::create([
                'name' => $data['name'],
                'gender' => $data['gender'],
                'age' => $data['age'],
                'phone_number' => $data['phone_number'],
                'user_id' => $user->id
            ]);
        }

        elseif ($data['type'] == 'organization') {
            $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'type' => 'organization'
            ]);

            $logo_name = preg_replace( '/[^a-z0-9]+/', '_', strtolower( $user->email ) ). '_' . time() . '.' . $data['logo']->getClientOriginalExtension();

            $data['logo']->storeAs('public/logo',$logo_name);

            Organization::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'logo' => $logo_name,
                'user_id' => $user->id
            ]);  
        }

        elseif ($data['type'] == 'admin') {
            $user = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'type' => 'admin'
            ]);
        }

        else {
            return back();
        }

        return $user;
    }
}
