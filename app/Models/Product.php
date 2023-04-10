<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'old_price',
        'stock',
        'image',
        'subcategory_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
