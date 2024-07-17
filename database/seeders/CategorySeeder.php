<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Top',
            'category_id'=>'top',
        ]);
        Category::create([
            'name'=>'Bottom',
            'category_id'=>'bottom',
        ]);
        Category::create([
            'name'=>'Footwear',
            'category_id'=>'footwear',
        ]);
        Category::create([
            'name'=>'Other',
            'category_id'=>'other',
        ]);
    }
}
