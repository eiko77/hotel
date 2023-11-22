<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Reservation_detailsTableSeeder extends Seeder
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
            'reservation_id' => '1',
            'room_id' => '1',
            'roomtype_id' => '1',
            'num_customers' => '1',
            'num_rooms' => '1',
            'room_no' => '201',
            'room_price' => '20000',
            'total_amount' => '20000',
        ];
        DB::table('reservation_details')->insert($param);
    }
}
