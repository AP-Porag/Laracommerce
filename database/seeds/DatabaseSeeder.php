<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(ColorSeeder::class);
         $this->call(SizeSeeder::class);
         $this->call(StatusSeeder::class);
         $this->call(UnitSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(SubCategorySeeder::class);

         factory('App\Models\Product',200)->create();
         factory('App\Models\Stock',430)->create();
    }
}
