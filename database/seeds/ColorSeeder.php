<?php

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
            'name'=>'khaki',
            'slug'=>'khaki',
            'color_code'=>'#d6a6e4',
        ]);
        Color::create([
            'name'=>'fuscia',
            'slug'=>'fuscia',
            'color_code'=>'#5d935c',
        ]);
        Color::create([
            'name'=>'pink',
            'slug'=>'pink',
            'color_code'=>'#5635f0',
        ]);
        Color::create([
            'name'=>'navy-blue',
            'slug'=>'navy-blue',
            'color_code'=>'#47239d',
        ]);
        Color::create([
            'name'=>'purple',
            'slug'=>'purple',
            'color_code'=>'#7c58af',
        ]);
        Color::create([
            'name'=>'maroon',
            'slug'=>'maroon',
            'color_code'=>'#949273',
        ]);
        Color::create([
            'name'=>'turquoise',
            'slug'=>'turquoise',
            'color_code'=>'#1c58b3',
        ]);
        Color::create([
            'name'=>'aquamarine',
            'slug'=>'aquamarine',
            'color_code'=>'#fa48cb',
        ]);
        Color::create([
            'name'=>'light-purple',
            'slug'=>'light-purple',
            'color_code'=>'#b7a3f9',
        ]);
        Color::create([
            'name'=>'red',
            'slug'=>'red',
            'color_code'=>'#a243a9',
        ]);
        Color::create([
            'name'=>'light-green',
            'slug'=>'light-green',
            'color_code'=>'#7ae102',
        ]);
        Color::create([
            'name'=>'indigo',
            'slug'=>'indigo',
            'color_code'=>'#fa8197',
        ]);
        Color::create([
            'name'=>'goldenrod',
            'slug'=>'goldenrod',
            'color_code'=>'#019206',
        ]);
    }
}
