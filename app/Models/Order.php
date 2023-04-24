<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'total_price',
        'code',
        'status',
        'transaction_id',
        'address_id',
        'user_id',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }


}
