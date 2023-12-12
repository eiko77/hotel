<?php

// use App\Reservation_detail;
// use App\Customer;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CustomersTableSeeder::class);
        $this->call(Reservation_detailsTableSeeder::class);
        //$this->call(ReservationsTableSeeder::class);
        //$this->call(RoomtypesTableSeeder::class);
        //$this->call(RoomsTableSeeder::class);
    }
}
