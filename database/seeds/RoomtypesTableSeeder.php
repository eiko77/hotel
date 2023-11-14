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
            'possible_num' => '2',      
        ];
        DB::table('roomtypes')->insert($param);

        $param = [
            'room_type' => 'デラックス',
            'possible_num' => '3',      
        ];
        DB::table('roomtypes')->insert($param);
        
        $param = [
            'room_type' => 'スイート',
            'possible_num' => '6',      
        ];
        DB::table('roomtypes')->insert($param);
    }
}
