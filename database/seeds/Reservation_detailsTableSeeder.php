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
            'reservation_id' => '1',
            'room_id' => '2',
            'accom_date' => '2023-11-01',
            'accom_fee' => '50000',
        ];
        DB::table('reservation_details')->insert($param);
        }
        }

