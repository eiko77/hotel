<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++){
        $param = [
            'name' => $faker->name(),
            'address' => $faker->address(),
            'telephone' => $faker->phoneNumber(),
            'mail' => $faker->email(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);
    }
}
}