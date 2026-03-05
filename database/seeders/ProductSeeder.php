<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $product = new Product();
        $product->name = "Teclado";
        $product->description = "Teclado mecánico";
        $product->price = 20000;
        $product->category_id = Category::inRandomOrder()->first()->id;
        $product->save();


        $product2 = new Product();
        $product2->name = "Portatil";
        $product2->description = "Laptop potente";
        $product2->price = 20000;
        $product2->category_id = Category::inRandomOrder()->first()->id;
        $product2->save();


        $product3 = new Product();
        $product3->name = "Audifonos";
        $product3->description = "Audífonos gamer";
        $product3->price = 20000;
        $product3->category_id = Category::inRandomOrder()->first()->id;
        $product3->save();
    }
}
