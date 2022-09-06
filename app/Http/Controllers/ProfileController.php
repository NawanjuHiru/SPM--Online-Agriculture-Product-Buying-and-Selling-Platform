<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel\User;

class ProfileController extends Controller
{
    public function profileShow($user_id)
    {
        $user = User::find(1);
        $profile = Profile::info($user_id) -> first();
        return view('auth.profile', compact('profile', 'user'));
    }

    public function profile()
    {
        return $this->hasOne('Profile');
    }
}
