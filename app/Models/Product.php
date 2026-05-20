<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'img', 'brand', 'title', 'rating', 'reviews',
        'sellPrice', 'orders', 'mrp', 'discount', 'category'
    ];
}
