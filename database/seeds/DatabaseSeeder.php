<?php

use App\Reservation_detail;
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
        $this->call(Reservation_detailsTableSeeder::class);
    }
}
