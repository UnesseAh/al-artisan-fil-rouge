<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderState extends Model
{
    use HasFactory;
    protected $fillable = ['status'];
    protected $hidden = ['created_at', 'updated_at'];


    public function orders(){
        return $this->hasOne(Order::class);
    }
}
