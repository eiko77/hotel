<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
            $param = [
                'customer_name' => '奈良鹿子',
                'address' => '奈良県奈良市',
                'telephone' => '12-3456-7890',
            ];
            DB::table('customers')->insert($param);

            $param = [
                'customer_name' => '静岡海子',
                'address' => '静岡県浜松市',
                'telephone' => '89-5555-6690',
            ];
            DB::table('customers')->insert($param);
      
}
}