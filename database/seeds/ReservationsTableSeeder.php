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
        'num_customers' => '2',
        'checkin' => '2023-12-01',
        'checkout' => '2023-12-02',
    ];
    DB::table('reservations')->insert($param);
    }
}
