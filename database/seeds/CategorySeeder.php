<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'grocery',
            'slug'=>'grocery',
            'thumbnail'=>'/storage/categories/grocery.jpg',
        ]);
        Category::create([
            'name'=>'mobile',
            'slug'=>'mobile',
            'thumbnail'=>'/storage/categories/mobile.jpg',
        ]);
        Category::create([
            'name'=>'fashion',
            'slug'=>'fashion',
            'thumbnail'=>'/storage/categories/fashion.jpg',
        ]);
        Category::create([
            'name'=>'electronics',
            'slug'=>'electronics',
            'thumbnail'=>'/storage/categories/electronics.jpg',
        ]);
        Category::create([
            'name'=>'home',
            'slug'=>'home',
            'thumbnail'=>'/storage/categories/home.jpg',
        ]);
        Category::create([
            'name'=>'appliance',
            'slug'=>'appliance',
            'thumbnail'=>'/storage/categories/appliance.jpg',
        ]);
        Category::create([
            'name'=>'travel',
            'slug'=>'travel',
            'thumbnail'=>'/storage/categories/travel.jpg',
        ]);
        Category::create([
            'name'=>'beauty,toys & more',
            'slug'=>'beauty-toys-&-more',
            'thumbnail'=>'/storage/categories/beauty',
        ]);
    }
}
