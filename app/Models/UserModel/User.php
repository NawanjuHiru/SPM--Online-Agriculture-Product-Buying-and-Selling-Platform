<?php

namespace App\Models\UserModel;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'Username', 
        'email', 
        'mobileNumber', 
        'address', 
        'password', 
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /* protected $casts = [
        'email_verified_at' => 'datetime',
    ]; */

    public function profile() {
        return $this ->  hasOne(Profile::class, 'user_id');
    }
}
