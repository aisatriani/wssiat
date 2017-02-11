<?php

use Illuminate\Database\Seeder;

class FakultasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fakultas')->delete();
        
        \DB::table('fakultas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kodefak' => '05',
                'fakultas' => 'FAKULTAS TEKNIK',
                'created_at' => '2017-02-03 08:26:53',
                'updated_at' => '2017-02-03 08:26:53',
            ),
        ));
        
        
    }
}
