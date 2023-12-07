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
            'name' => '管理者',
            'address' => 'Hotel管理者用',
            'telephone' => '00-0000-0000',
            'mail' => 'admin@hotel',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '静岡　茶子',
            'address' => '静岡県掛川市',
            'telephone' => '0538-88-6666',
            'mail' => 'tya@hatake',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '浜松　うなぎ',
            'address' => '静岡県浜松市',
            'telephone' => '053-588-9999',
            'mail' => 'unagi@tare',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);

        

        $param = [
            'name' => '秋田　熊男',
            'address' => '秋田県秋田市',
            'telephone' => '022-344-5544',
            'mail' => 'akita@kuma',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);

        $param = [
            'name' => '奈良　鹿子',
            'address' => '奈良県奈良市奈良公園',
            'telephone' => '0723-88-6666',
            'mail' => 'sika@senbei.jp',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('customers')->insert($param);




    }
}
