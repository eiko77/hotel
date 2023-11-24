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
            'roomtype_id' => '1',
            'hotel_fee' => '20000',
            'other_charge' => '5000',
            'tax' => '2500',
            'total_amount' => '27500',
            'details' => '鹿せんべいお持ち帰り',
           
        ];
        DB::table('reservation_details')->insert($param);
        $param = [
            
            'reservation_id' => '2',
            'room_id' => '5',
            'roomtype_id' => '3',
            'hotel_fee' => '100000',
            'other_charge' => '0',
            'tax' => '0',
            'total_amount' => '110000',
            'details' => '特になし',
           
        ];
        DB::table('reservation_details')->insert($param);

        $param = [
            
            'reservation_id' => '3',
            'room_id' => '3',
            'roomtype_id' => '2',
            'hotel_fee' => '100000',
            'other_charge' => '10000',
            'tax' => '11000',
            'total_amount' => '121000',
            'details' => '特上ワイン追加',
           
        ];
        DB::table('reservation_details')->insert($param);
    }
}
