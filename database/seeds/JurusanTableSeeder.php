<?php

use Illuminate\Database\Seeder;

class JurusanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jurusan')->delete();
        
        \DB::table('jurusan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kodefak' => '05',
                'kodejur' => '22401',
                'jurusan' => 'TEKNIK SIPIL',
                'created_at' => '2017-02-03 08:26:53',
                'updated_at' => '2017-02-03 08:26:53',
            ),
            1 => 
            array (
                'id' => 2,
                'kodefak' => '05',
                'kodejur' => '20401',
                'jurusan' => 'TEKNIK ELEKTRO',
                'created_at' => '2017-02-03 08:30:04',
                'updated_at' => '2017-02-03 08:30:04',
            ),
            2 => 
            array (
                'id' => 3,
                'kodefak' => '05',
                'kodejur' => '57401',
                'jurusan' => 'TEKNIK INFORMATIKA',
                'created_at' => '2017-02-03 08:30:07',
                'updated_at' => '2017-02-03 08:30:07',
            ),
            3 => 
            array (
                'id' => 4,
                'kodefak' => '05',
                'kodejur' => '88210',
                'jurusan' => 'SENI RUPA',
                'created_at' => '2017-02-03 08:30:19',
                'updated_at' => '2017-02-03 08:30:19',
            ),
            4 => 
            array (
                'id' => 5,
                'kodefak' => '05',
                'kodejur' => '23401',
                'jurusan' => 'TEKNIK ARSITEKTUR',
                'created_at' => '2017-02-03 08:30:22',
                'updated_at' => '2017-02-03 08:30:22',
            ),
            5 => 
            array (
                'id' => 6,
                'kodefak' => '05',
                'kodejur' => '26401',
                'jurusan' => 'TEKNIK INDUSTRI',
                'created_at' => '2017-02-03 08:30:25',
                'updated_at' => '2017-02-03 08:30:25',
            ),
        ));
        
        
    }
}
