<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel\User;
use App\Models\UserModel\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use PDF;

class AdminController extends Controller
{
    public function index()
   {
       if(Auth::user()->hasRole('user')){
            return view('home');
       }elseif(Auth::user()->hasRole('admin')){
        return view('auth.userList');
   }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
