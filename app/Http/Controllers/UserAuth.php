<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    function register_page()
    {
        return view('pages.auth.register');
    }
    function sign_up(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' =>  'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password|min:8',

            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->confirm_password = Hash::make($request->confirm_password);
            $user->save();
            $loginuser = Auth::login($user);

            // dd(Auth::user());

            return view('pages.profile_setting');
        }
    }
    function login_page()
    {
        return view('pages.auth.login');
    }
    function login_process(Request $request)
    {
        $controls = $request->all();

        $rules = [
            'email' => 'required|exists:users',
            'password' => 'required|min:8'
        ];

        $meassage = [
            'email.exist' => 'User Not Found'
        ];

        $validator = Validator::make($controls, $rules, $meassage);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controls);
        }
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            // dd("done");
            return redirect()->route('profilesetting');
        } else {
            session()->flash('message', 'Invalid credentials');
            session()->flash('messageType', 'danger');
            return redirect()->back()->With('error', "Email Not Found!");
        }
    }
    public function profilesetting()
    {
        return view('pages.profile_setting');
    }
    public function logout()
    {
       Auth::logout();
        return redirect('/login');
    }
}
