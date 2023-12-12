<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

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
            'hotel_fee' => '20000',
               
        ];
        DB::table('reservation_details')->insert($param);
    }
}
