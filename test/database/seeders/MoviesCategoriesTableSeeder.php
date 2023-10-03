<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesCategoriesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('movies_categories')->delete();
        DB::table('movies_categories')->insert([
            ['id' => 'e578605c-f9d3-43bb-a4ce-1cdbc02d4003', 'name' => 'New Release','rental_per_day' => 3,'rental_extra_days' => null, 'bonus' => true],
            ['id' => '407a4a65-c503-402d-a03b-d734f1365b52', 'name' => 'CHILDRENS', 'rental_per_day' => 1.5,'rental_extra_days' => 1.5, 'bonus' => false],
            ['id' => '13426780-1bae-4a78-b468-8c577e7f3a56', 'name' => 'REGULAR','rental_per_day' => 2 ,'rental_extra_days' => 1.5, 'bonus' => false]
        ]);
    }
}
