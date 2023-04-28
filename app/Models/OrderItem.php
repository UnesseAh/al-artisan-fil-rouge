<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'handicraft_id',
        'quantity',
        'price',
    ];

    public function handicraft()
    {
        return $this->belongsTo(Handicraft::class);
    }
}
