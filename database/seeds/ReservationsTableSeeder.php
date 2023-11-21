<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'customer_id' => '1',
            'roomtype_id' => '1',
            'name' => '奈良鹿子',
            'num_customers' => '1',
            'roomtype' => 'スタンダード',
            'num_rooms' => '1',
            'checkin' => '2023-12-01',
            'checkout' => '2023-12-02',
            'note' => 'ジビエアレルギー有',
        ];
        DB::table('reservations')->insert($param);
    }
}
