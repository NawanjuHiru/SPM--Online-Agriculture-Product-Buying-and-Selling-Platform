<?php

namespace App\Models\order_management;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'name',
        'contact_number',
        'email',
        'address',
        'zip_code',
        'city',
        'created_at',
        'updated_at',
    ];
}
