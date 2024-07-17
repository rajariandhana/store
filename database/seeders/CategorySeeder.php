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
            'slug'=>'top',
        ]);
        Category::create([
            'name'=>'Bottom',
            'slug'=>'bottom',
        ]);
        Category::create([
            'name'=>'Footwear',
            'slug'=>'footwear',
        ]);
        Category::create([
            'name'=>'Other',
            'slug'=>'other',
        ]);
    }
}
