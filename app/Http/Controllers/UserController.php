<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login() {
        return view('auth.login');
    }

    function register() {
        return view('auth.register');
    }

    function forgetPassword() {
        return view('auth.forgetPassword');
    }

    function save(Request $request) {
        //validate request
        $request -> validate([
            'userName' => 'required',
            'email' => 'required|email|unique:user',
            'mobileNumber' => 'required',
            'address' => 'required',
            'password' => 'required|min:5|max:12',
            'isAvtive' => '1'
        ]); 

        //insert data into database
        $user = new User;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> mobileNumber = $request -> mobileNumber;
        $user -> address = $request -> address;
        $user -> password = Hash::make($request -> password);
        $user -> isActive = $request -> isActive;
        $save -> $user -> save();

        if ($save) {
            return back() -> with('success','New User has been successfully added.');
        } else {
            return back() -> with('fail','Something went wrong. Try again later.');
        }
    }

    function ckeck(Request $request) {
        //validate request
        $request -> validate([
            'userName' => 'required',
            'password' => 'required|min:5|max:12'
        ]); 

        $userInfo = User::where('userName','=', $request -> userName) -> first();

        if (!userInfo) {
            return back() -> with('fail','We do not recognize your username.');
        } else {
            //check password
            if (Hash::check($request -> password, $userInfo -> password)) {
                $request -> session() -> put('LoggedUser', $userInfo -> id);
                return redirect('user/home');
            } else {
                return back() -> with('fail','Incorrect password.');
            }
        }

        function logout() {
            if(session() -> has('LoggedUser')) {
                session() -> pull('LoggedUser');
                return redirect('/auth/login');
            }
        }
    }
}
