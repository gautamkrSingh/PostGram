<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            "employee_id" => 1,
            "device" => "drone",
            "created_at" => Carbon::now()->format('Y-m-d H:i:s'),
            "updated_at" => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
