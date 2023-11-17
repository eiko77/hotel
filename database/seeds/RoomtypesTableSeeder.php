<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'room_type' => 'スタンダード',
            'room_price' => '20000',
            'possible_num' => '2',      
        ];
        DB::table('roomtypes')->insert($param);

        $param = [
            'room_type' => 'デラックス',
            'room_price' => '50000',
            'possible_num' => '3',      
        ];
        DB::table('roomtypes')->insert($param);
        
        $param = [
            'room_type' => 'スイート',
            'room_price' => '100000',
            'possible_num' => '6',      
        ];
        DB::table('roomtypes')->insert($param);
    }
}
