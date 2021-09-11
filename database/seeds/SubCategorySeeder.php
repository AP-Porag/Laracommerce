<?php

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id'=>'1',
            'name'=>'meet',
            'slug'=>'meet',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'1',
            'name'=>'fish',
            'slug'=>'fish',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'1',
            'name'=>'vegetable',
            'slug'=>'vegetable',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'1',
            'name'=>'fruit',
            'slug'=>'fruit',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'1',
            'name'=>'bread',
            'slug'=>'bread',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'2',
            'name'=>'samsung',
            'slug'=>'samsung',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'2',
            'name'=>'apple',
            'slug'=>'apple',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'2',
            'name'=>'huawei',
            'slug'=>'huawei',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'2',
            'name'=>'xiaomi',
            'slug'=>'xiaomi',
            'thumbnail'=>'/storage/subcategories/grocery.jpg',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'mens wear',
            'slug'=>'mens-wear',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'womens wear',
            'slug'=>'womens-wear',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'women western',
            'slug'=>'women-western',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'footwear',
            'slug'=>'footwear',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'watches & accessories',
            'slug'=>'watches-&-accessories',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'kids',
            'slug'=>'kids',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'essentials',
            'slug'=>'essentials',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'winter',
            'slug'=>'winter',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'camera',
            'slug'=>'camera',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'computer accessories',
            'slug'=>'computer-accessories',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'laptop & Desktop',
            'slug'=>'laptop-&-Desktop',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'tablets',
            'slug'=>'tablets',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'gaming',
            'slug'=>'gaming',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'mobile accessories',
            'slug'=>'mobile accessories',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'living room',
            'slug'=>'living-room',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'kitchen & dining',
            'slug'=>'kitchen-&-dining',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'bedroom',
            'slug'=>'bedroom',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'home decor',
            'slug'=>'home-decor',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'tools & lighting',
            'slug'=>'tools-&-lighting',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'kids furniture',
            'slug'=>'kids-furniture',
        ]);
        SubCategory::create([
            'category_id'=>'5',
            'name'=>'pet & gardening',
            'slug'=>'pet-&-gardening',
        ]);
        SubCategory::create([
            'category_id'=>'6',
            'name'=>'home appliance',
            'slug'=>'home-appliance',
        ]);
        SubCategory::create([
            'category_id'=>'6',
            'name'=>'kitchen appliance',
            'slug'=>'kitchen-appliance',
        ]);
        SubCategory::create([
            'category_id'=>'7',
            'name'=>'bags',
            'slug'=>'bags',
        ]);
        SubCategory::create([
            'category_id'=>'7',
            'name'=>'suitcase',
            'slug'=>'suitcase',
        ]);
        SubCategory::create([
            'category_id'=>'7',
            'name'=>'luggage',
            'slug'=>'luggage',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'mens grooming',
            'slug'=>'mens-grooming',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'womens grooming',
            'slug'=>'womens grooming',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'baby care',
            'slug'=>'baby care',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'sports & fitness',
            'slug'=>'sports-&-fitness',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'makeup',
            'slug'=>'makeup',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'body & skin care',
            'slug'=>'body-&-skin-care',
        ]);
        SubCategory::create([
            'category_id'=>'8',
            'name'=>'hair care',
            'slug'=>'hair care',
        ]);
    }
}
