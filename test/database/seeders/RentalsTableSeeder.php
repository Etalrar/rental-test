<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('rentals')->delete();
        DB::table('rentals')->insert([
            ['id' => '6dc68b68-8f81-4350-b11f-aeddf08efa50', 'date_begin_rental' => '2023-10-05','date_end_rental' => '2023-10-08', 'customers_id'=> '84bc6c12-cfa9-4e5a-8995-bf08a4c9686f', 'movies_id' => 'fc512c34-da00-4dce-a2ea-c268481ecca9'],
            ['id' => 'b23f3dc6-8075-4b96-9aa8-8e29b2fbe5e7', 'date_begin_rental' => '2023-10-05','date_end_rental' => '2023-10-06', 'customers_id'=> '84bc6c12-cfa9-4e5a-8995-bf08a4c9686f', 'movies_id' => 'e1723cf7-caaf-4aa5-8ade-317d91ac0c08'],
            ['id' => '7e8a7df1-1c3a-4e49-93cb-b84a37b27772', 'date_begin_rental' => '2023-10-05','date_end_rental' => '2023-10-06', 'customers_id'=> '84bc6c12-cfa9-4e5a-8995-bf08a4c9686f', 'movies_id' => '13426780-1bae-4a78-b468-8c577e7f3a56']
        ]);
    }
}
