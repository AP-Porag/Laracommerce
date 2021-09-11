<?php

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name'=>'litter',
            'slug'=>'litter',
            'short_form'=>'lt',
        ]);
        Unit::create([
            'name'=>'kilogram',
            'slug'=>'kilogram',
            'short_form'=>'kg',
        ]);
        Unit::create([
            'name'=>'piece',
            'slug'=>'piece',
            'short_form'=>'pcs',
        ]);
        Unit::create([
            'name'=>'feet',
            'slug'=>'feet',
            'short_form'=>'ft',
        ]);
        Unit::create([
            'name'=>'meeter',
            'slug'=>'meeter',
            'short_form'=>'m',
        ]);
    }
}
