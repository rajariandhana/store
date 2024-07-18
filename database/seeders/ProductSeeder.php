<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24001',
            'name'=>'Oversized T-Shirt',
            'price'=>120000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white|red|blue',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24002',
            'name'=>'Classic T-Shirt',
            'price'=>95000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24003',
            'name'=>'Long Sleeve T-Shirt',
            'price'=>140000,
            'sizes'=>'S|M|L',
            'colors'=>'red|blue',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24004',
            'name'=>'Classic Hoodie',
            'price'=>230000,
            'sizes'=>'S|M|L',
            'colors'=>'gray|purple|pink',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24005',
            'name'=>'Oversized T-Shirt',
            'price'=>120000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white|red|blue',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24006',
            'name'=>'Classic T-Shirt',
            'price'=>95000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24007',
            'name'=>'Long Sleeve T-Shirt',
            'price'=>140000,
            'sizes'=>'S|M|L',
            'colors'=>'red|blue',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24008',
            'name'=>'Classic Hoodie',
            'price'=>230000,
            'sizes'=>'S|M|L',
            'colors'=>'gray|purple|pink',
        ]);



        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24001',
            'name'=>'New Jeans',
            'price'=>235000,
            'sizes'=>'S|M|L',
            'colors'=>'black|beige',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24002',
            'name'=>'Short Pants',
            'price'=>165000,
            'sizes'=>'S|M|L',
            'colors'=>'olive',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24003',
            'name'=>'Cargo Pants',
            'price'=>245000,
            'sizes'=>'S|M|L',
            'colors'=>'black|gray|olive',
        ]);



        Product::create([
            'category_id'=>'footwear',
            'product_id'=>'f24001',
            'name'=>'Sneaker',
            'price'=>165000,
            'sizes'=>'38|40|42',
            'colors'=>'white',
        ]);
        Product::create([
            'category_id'=>'footwear',
            'product_id'=>'f24002',
            'name'=>'Sandal',
            'price'=>245000,
            'sizes'=>'38|40|42',
            'colors'=>'black|red',
        ]);
    }
}
