<?php

use Illuminate\Database\Seeder;

//Memanggil Carbon untuk menjalankan generate value datetime
use Carbon\Carbon;

class Sys_ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
			['name'=>'a1', 'icon'=>'a2', 'path'=> 'a3', 'table_name'=>'a4', 'controller'=>'a5', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
			['name'=>'b1', 'icon'=>'b2', 'path'=> 'b3', 'table_name'=>'b4', 'controller'=>'b5', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
			['name'=>'c1', 'icon'=>'c2', 'path'=> 'c3', 'table_name'=>'c4', 'controller'=>'c5', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
			['name'=>'d1', 'icon'=>'d2', 'path'=> 'd3', 'table_name'=>'d4', 'controller'=>'d5', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
			['name'=>'e1', 'icon'=>'e2', 'path'=> 'e3', 'table_name'=>'e4', 'controller'=>'e5', 'created_at'=>Carbon::now()->format('Y-m-d H:i:s')],
		];

		// masukkan data ke database
		DB::table('sys_modules')->insert($modules);
    }
}
