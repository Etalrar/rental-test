<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('movies')->delete();
        DB::table('movies')->insert([
            ['id' => 'fc512c34-da00-4dce-a2ea-c268481ecca9', 'name' => 'Prognosis Negative', 'movies_categories_id' => 'e578605c-f9d3-43bb-a4ce-1cdbc02d4003'],
            ['id' => 'e1723cf7-caaf-4aa5-8ade-317d91ac0c08', 'name' => 'Sack Lunch', 'movies_categories_id' => '407a4a65-c503-402d-a03b-d734f1365b52'],
            ['id' => '13426780-1bae-4a78-b468-8c577e7f3a56', 'name' => 'The Pain and the Yearning', 'movies_categories_id' => '13426780-1bae-4a78-b468-8c577e7f3a56']
        ]);
    }
}
