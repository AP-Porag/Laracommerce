<?php

use App\Models\status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        status::create([
            'name'=>'active',
            'slug'=>'active',
        ]);
        status::create([
            'name'=>'inactive',
            'slug'=>'inactive',
        ]);
    }
}
