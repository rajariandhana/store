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
            'name'=>'Oversized Striped T-Shirt',
            'price'=>249000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Pink|Olive|Navy',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24002',
            'name'=>'Classic T-Shirt',
            'price'=>199000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Black|White|Red|Blue|Green|Brown|Gray|Navy',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24003',
            'name'=>'Long Sleeve T-Shirt',
            'price'=>199000,
            'sizes'=>'Gray|Black|Orange|Navy|Beige',
            'colors'=>'red|blue',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24004',
            'name'=>'Open Collar Shirt',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Wine|Black',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24005',
            'name'=>'Pullover Waffle Long Sleeve',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Beige|Gray|Dark Green|Black|White',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24006',
            'name'=>'Classic Open Collar Shirt',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Brown|Beige|Blue|Black|White|Olive',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24007',
            'name'=>'Pullover Sweat Hoodie',
            'price'=>499000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Gray|Mint|Navy|Dark Gray|Black|White',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24008',
            'name'=>'Open Collar Shirt',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Blue|White',
        ]);
        Product::create([
            'category_id'=>'top',
            'product_id'=>'t24009',
            'name'=>'Jersey Long Sleeve Shirt',
            'price'=>599000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Beige|Off White|Olive',
        ]);



        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24001',
            'name'=>'Wide Fit Chino Pants',
            'price'=>599000,
            'sizes'=>'76cm|79cm|82cm|85cm',
            'colors'=>'Brown|Dark Brown|Black',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24002',
            'name'=>'Cargo Pants',
            'price'=>599000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Olive|Navy|Black|Off White',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24003',
            'name'=>'Ultra Stretch Jeans',
            'price'=>499000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Beige|Olive|Navy|Black',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24004',
            'name'=>'Jogger Cargo Pants',
            'price'=>599000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Olive|Black|Gray|Beige',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24005',
            'name'=>'Dry Stretch Shorts',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Dark Gray|Black|Pink|Beige|Green|Blue',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24006',
            'name'=>'Chino Shorts',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Brown|Red|Black|Beige|Navy',
        ]);
        Product::create([
            'category_id'=>'bottom',
            'product_id'=>'b24007',
            'name'=>'DRY-EX Ultra Stretch Shorts',
            'price'=>299000,
            'sizes'=>'Small|Medium|Large',
            'colors'=>'Black|Dark Gray|White',
        ]);



        Product::create([
            'category_id'=>'footwear',
            'product_id'=>'f24001',
            'name'=>'Cotton Canvas Shoe',
            'price'=>499000,
            'sizes'=>'38|40|42',
            'colors'=>'Beige|Black|White',
        ]);
        Product::create([
            'category_id'=>'footwear',
            'product_id'=>'f24002',
            'name'=>'Sneakers',
            'price'=>599000,
            'sizes'=>'38|40|42',
            'colors'=>'Black|White',
        ]);
        Product::create([
            'category_id'=>'footwear',
            'product_id'=>'f24003',
            'name'=>'Knitted Sneakers',
            'price'=>599000,
            'sizes'=>'38|40|42',
            'colors'=>'Off White|Black',
        ]);
    }
}
