<?php

namespace App\Models\order_management;

use App\Models\product_management\productModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'cart';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'product_id',
        'status',
        'created_at',
        'updated_at',
    ];

    public function product()
    {
        return $this->hasOne(productModel::class, 'product_id', 'product_id');
    }
}
