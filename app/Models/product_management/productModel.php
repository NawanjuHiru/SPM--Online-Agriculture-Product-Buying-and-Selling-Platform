<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;

    protected $table = 'product_details';
    protected $primaryKey = 'product_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'product_name',
        'category',
        'product_price',
        'product_desc',
        'product_image',
        'user_id',
        'created_at',
        'updated_at',
        
    ];
}