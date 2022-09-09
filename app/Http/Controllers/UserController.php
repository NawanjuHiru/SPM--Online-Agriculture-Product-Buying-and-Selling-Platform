<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel\User;
use App\Models\UserModel\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserController extends Controller
{
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

    /* public function destroy($user_id) {
        DB::delete('delete from user where id = ?',[$user_id]);
    } */

    function save(Request $request) {
        //validate request
        $request -> validate([
            'username' => 'required',
            'email' => 'required|email|unique:user',
            'mobileNumber' => 'required',
            'address' => 'required',
            'password' => 'required|min:5|max:12'
        ]); 

        //insert data into database
        $user = new User;
        $user -> username = $request -> username;
        $user -> email = $request -> email;
        $user -> mobileNumber = $request -> mobileNumber;
        $user -> address = $request -> address;
        $user -> password = Hash::make($request -> password);
        $save = $user -> save();

        if ($save) {
            return back() -> with('success','New User has been successfully added.');
        } else {
            return back() -> with('fail','Something went wrong. Try again later.');
        }
    }

    function check(Request $request) {
        //validate request
        $request -> validate([
            'username' => 'required',
            'password' => 'required|min:5|max:12'
        ]); 

        $userInfo = User::where('username','=', $request -> username) -> first();

        if (!$userInfo) {
            return back() -> with('fail','We do not recognize your username.');
        } else {
            //check password
            if (Hash::check($request -> password, $userInfo -> password)) {
                $request -> session() -> put('LoggedUser', $userInfo -> user_id);
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

    function profileShow($user_id){
        return view('auth.profile', compact('profile'));
    }

    function updateUser(){
        return view('auth.updateUser');
    }

    public function forgetPassword() {
        return view('auth.forgetPassword');
    }

    public function sendResetLink(Request $request){
        $request -> validate([
            'email' => 'required|email|exists:user,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets') -> insert([
            'email' => $request -> email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('auth.resetPassword',['token' => $token, 'email' => $request -> email]);
        $body = "We are received a request to reset the password for <b>AgriProduct</b> account associated with ".$request -> email.". You can reset your password by clicking the link below";

        \Mail::send('auth.emailForget',['action_link' => $action_link,'body' => $body], function($message) use ($request){
            $message -> from('agriproduct123@gmail.com','Agri Product');
            $message -> to($request -> email, 'username')
                     -> subject('Reset Password');
        });

        return back() -> with('success', 'We have e-mailed your password reset link.');
       }

       public function resetPasswordForm(Request $request, $token = null){
        return view('auth.resetPassword') -> with(['token' => $token, 'email' => $request -> email]);
       }

       public function resetPassword(Request $request){
        $request -> validate([
            'email' => 'required|email|exists:user,email',
            'password' => 'required|min:5|max:12',
        ]);

        $check_token = \DB::table('password_resets') -> where([
            'email' => $request -> email,
            'token' => $request -> token,
        ]) -> first();

        if(!$check_token){
            return back() -> withInput() -> with('fail', 'Invalid Token');
        } else {
            User::where('email', $request -> email) -> update([
                'password' => Hash::make($request -> password)
            ]);

            \DB::table('password_resets') -> where([
                'email' => $request -> email
            ]) -> delete();

            return redirect() -> route('auth.login') -> with('info', 'Your password has been changed. You can login with new password.')
            -> with($request -> email);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $user_id
     * @return \Illuminate\Http\Response
     */

    public function show($user_id) {
        $user = User::find($user_id);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $user_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('auth.updateUser')->with('userdata',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $user_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userdata = User::find($request -> user_id);
        $userdata -> username = $request -> username;
        $userdata -> email = $request -> email;
        $userdata -> mobileNumber = $request -> mobileNumber;
        $userdata -> address = $request -> address;
        $userdata -> password = Hash::make($request -> password);

        $userdata -> save();
        /* $userdatas = User::all();
        return view('order_management.retrieve_order')->with('order_details',$orderdatas); */
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($user_id) -> delete();
        return redirect() -> route('auth.userList')
        -> with(['status'=>'success','msg'=>'User Deleted successfully']);
    }
}
