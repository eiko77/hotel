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
            
            'customer_id' => '5',
            'num_customers' => '1',
            'num_rooms' => '1',
            'roomtype_id' => '1',
            'checkin' => '2023-12-01',
            'checkout' => '2023-12-02',
            'note' => 'ジビエアレルギー有',
           
        ];
        DB::table('reservations')->insert($param);

        $param = [
            
            'customer_id' => '2',
            'num_customers' => '2',
            'num_rooms' => '1',
            'roomtype_id' => '3',
            'checkin' => '2023-12-11',
            'checkout' => '2023-12-12',
            'note' => '誕生日ケーキ',
           
        ];
        DB::table('reservations')->insert($param);
        $param = [
            
            'customer_id' => '3',
            'num_customers' => '4',
            'num_rooms' => '2',
            'roomtype_id' => '2',
            'checkin' => '2023-12-21',
            'checkout' => '2023-12-22',
            'note' => '送迎希望',
           
        ];
        DB::table('reservations')->insert($param);
    }
}
