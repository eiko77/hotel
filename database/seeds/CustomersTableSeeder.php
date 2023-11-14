<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '奈良鹿子',
            'address' => '奈良県奈良市',
            'telephone' => '12-3456-7890',
        ];
        DB::table('customers')->insert($param);
        $param = [
            'name' => '静岡海子',
            'address' => '静岡県浜松市',
            'telephone' => '89-5555-6690',
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '中西さきこ',
            'address' => '奈良県橿原市',
            'telephone' => '89-7777-6690',
        ];
        DB::table('customers')->insert($param);

    }
}
