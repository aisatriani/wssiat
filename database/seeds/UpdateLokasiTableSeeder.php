<?php

use Illuminate\Database\Seeder;

class UpdateLokasiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('update_lokasi')->delete();
        
        \DB::table('update_lokasi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nidn' => '923940234',
                'nama' => NULL,
                'latitude' => 0.123213,
                'longitude' => 123.00230000000001,
                'active' => 0,
                'created_at' => '2017-01-10 10:51:16',
                'updated_at' => '2017-01-10 10:51:16',
            ),
            1 => 
            array (
                'id' => 2,
                'nidn' => 'x923940234',
                'nama' => NULL,
                'latitude' => 0.12321310000000001,
                'longitude' => 123.00230000000001,
                'active' => 0,
                'created_at' => '2017-01-10 10:59:17',
                'updated_at' => '2017-01-10 11:00:13',
            ),
            2 => 
            array (
                'id' => 3,
                'nidn' => '342434234',
                'nama' => NULL,
                'latitude' => 0.12321310000000001,
                'longitude' => 123.00230000000001,
                'active' => 0,
                'created_at' => '2017-01-10 11:00:57',
                'updated_at' => '2017-01-10 11:00:57',
            ),
            3 => 
            array (
                'id' => 4,
                'nidn' => '4533545',
                'nama' => NULL,
                'latitude' => 0.23211109999999999,
                'longitude' => 123.55110999999999,
                'active' => 0,
                'created_at' => '2017-01-10 11:04:18',
                'updated_at' => '2017-01-10 11:05:08',
            ),
        ));
        
        
    }
}
