<?php

namespace App\Http\Controllers\user_management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel\Admin;
use App\Models\UserModel\Role;
use App\Models\UserModel\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use PDF;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
     function adminlogin() {
          return view('auth.adminlogin');
     }

     function login() {
        return view('auth.login');
    }

     function register() {
          return view('auth.register');
      }
  
     public function userList(){
          $user = DB::select('select * from user');
          return view('auth.userList',['user' => $user]);
     }

    public function check(Request $request) {
          //validate request
          $request -> validate([
              'username' => 'required',
              'password' => 'required|min:5|max:12'
          ]); 
  
          $adminInfo = Admin::where('username','=', $request -> username) -> first();
  
          if (!$adminInfo) {
              return back() -> with('fail','We do not recognize your username.');
          } else {
              //check password
              if (Hash::check($request -> password, $adminInfo -> password)) {
                  $request -> session() -> put('LoggedUser', $adminInfo -> admin_id);
                  return redirect('/auth/userList');
              } else {
                  return back() -> with('fail','Incorrect password.');
              }
          }
  
          // function logout() {
          //     if(session() -> has('LoggedUser')) {
          //         session() -> pull('LoggedUser');
          //         return redirect('/auth/login');
          //     }
          // }
  
  
        /**
        * Log out account admin.
        *
        * @return \Illuminate\Routing\Redirector
        */
        function adminperform()
        {
            Session::flush();
            Auth::logout();
            return redirect('/auth/login');
        }
    }
}
