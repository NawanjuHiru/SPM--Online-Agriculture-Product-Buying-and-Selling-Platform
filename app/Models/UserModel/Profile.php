<?php

namespace App\Models\UserModel;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('User');
    }
}