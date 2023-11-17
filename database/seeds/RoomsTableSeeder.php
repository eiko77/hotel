<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'roomtype_id' => '1',
            'room_no' => '201',
        ];
        DB::table('rooms')->insert($param);

            $param = [
            'roomtype_id' => '1',
            'room_no' => '202',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'roomtype_id' => '2',
            'room_no' => '301',
        ];
        DB::table('rooms')->insert($param);
        $param = [
            'roomtype_id' => '2',
            'room_no' => '302',
        ];
        DB::table('rooms')->insert($param);
      
        $param = [
            'roomtype_id' => '3',
            'room_no' => '501',
        ];
        DB::table('rooms')->insert($param);

       
    }
}
