<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subtotal',
        'shipping_address',
        'payment_method',
        'status_id',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function orderState(){
        return $this->hasOne(OrderState::class);
    }
}
