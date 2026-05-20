<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {  
      Product::create([
    'img'=>'/shoe.png',
      'brand'=>'Nike',
      'title'=>'Nike 1Air Max 270',
      'rating'=>4.5,
      'reviews'=>1200,
      'sellPrice'=>150,
      'orders'=>500,
      'mrp'=>200,
      'discount'=>25,
      'category'=>'men'
      ]);
       Product::create([
    'img'=>'/box.png',
      'brand'=>'Nike',
      'title'=>'Nike 2Air Max 270',
      'rating'=>4.5,
      'reviews'=>1200,
      'sellPrice'=>150,
      'orders'=>500,
      'mrp'=>200,
      'discount'=>25,
      'category'=>'wemen'
      ]);
    }
}