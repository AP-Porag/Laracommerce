<?php

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'name'=>'small',
            'slug'=>'small',
            'short_name'=>'s',
        ]);
        Size::create([
            'name'=>'extra-small',
            'slug'=>'extra-small',
            'short_name'=>'xs',
        ]);
        Size::create([
            'name'=>'medium',
            'slug'=>'medium',
            'short_name'=>'m',
        ]);
        Size::create([
            'name'=>'large',
            'slug'=>'large',
            'short_name'=>'l',
        ]);
        Size::create([
            'name'=>'extra-large',
            'slug'=>'extra-large',
            'short_name'=>'xl',
        ]);
        Size::create([
            'name'=>'extra-extra-large',
            'slug'=>'extra-extra-large',
            'short_name'=>'xxl',
        ]);
    }
}
