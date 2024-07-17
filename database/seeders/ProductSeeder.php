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
            'category_id'=>1,
            'productID'=>'t24001',
            'name'=>'Oversized T-Shirt',
            'price'=>120000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white|red|blue',
        ]);
        Product::create([ 
            'category_id'=>1,
            'productID'=>'t24002',
            'name'=>'Classic T-Shirt',
            'price'=>95000,
            'sizes'=>'S|M|L',
            'colors'=>'black|white',
        ]);
        Product::create([ 
            'category_id'=>1,
            'productID'=>'t24003',
            'name'=>'Long Sleeve T-Shirt',
            'price'=>140000,
            'sizes'=>'S|M|L',
            'colors'=>'red|blue',
        ]);
        Product::create([ 
            'category_id'=>1,
            'productID'=>'t24004',
            'name'=>'Classic Hoodie',
            'price'=>230000,
            'sizes'=>'S|M|L',
            'colors'=>'gray|purple|pink',
        ]);

        

        Product::create([ 
            'category_id'=>2,
            'productID'=>'b24001',
            'name'=>'New Jeans',
            'price'=>235000,
            'sizes'=>'S|M|L',
            'colors'=>'black|beige',
        ]);
        Product::create([ 
            'category_id'=>2,
            'productID'=>'b24002',
            'name'=>'Short Pants',
            'price'=>165000,
            'sizes'=>'S|M|L',
            'colors'=>'olive',
        ]);
        Product::create([ 
            'category_id'=>2,
            'productID'=>'b24003',
            'name'=>'Cargo Pants',
            'price'=>245000,
            'sizes'=>'S|M|L',
            'colors'=>'black|gray|olive',
        ]);
    }
}