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
        'state_id',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function state(){
        return $this->belongsTo(OrderState::class);
    }
}
