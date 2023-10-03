<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('customers')->delete();
        DB::table('customers')->insert([
            ['id' => '84bc6c12-cfa9-4e5a-8995-bf08a4c9686f', 'name' => 'Susan Ross']
        ]);
    }
}
