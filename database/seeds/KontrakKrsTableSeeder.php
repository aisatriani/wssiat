<?php

use Illuminate\Database\Seeder;

class KontrakKrsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kontrak_krs')->delete();
        
        \DB::table('kontrak_krs')->insert(array (
            0 => 
            array (
                'id' => 73,
                'nim' => '531414081',
                'kodemakul' => '531410113',
                'namamakul' => 'PENDIDIKAN AGAMA',
                'pa' => '0008127805',
                'setujui' => 1,
                'tahun' => '2017',
                'semester' => '1',
                'created_at' => '2017-02-08 07:31:05',
                'updated_at' => '2017-02-08 09:55:13',
            ),
            1 => 
            array (
                'id' => 74,
                'nim' => '531414081',
                'kodemakul' => '531410213',
                'namamakul' => 'BAHASA INGGRIS',
                'pa' => '0008127805',
                'setujui' => 1,
                'tahun' => '2017',
                'semester' => '1',
                'created_at' => '2017-02-08 07:31:05',
                'updated_at' => '2017-02-08 09:55:16',
            ),
            2 => 
            array (
                'id' => 75,
                'nim' => '531414081',
                'kodemakul' => '531410313',
                'namamakul' => 'MATEMATIKA',
                'pa' => '0008127805',
                'setujui' => 2,
                'tahun' => '2017',
                'semester' => '1',
                'created_at' => '2017-02-08 07:31:05',
                'updated_at' => '2017-02-08 09:55:17',
            ),
            3 => 
            array (
                'id' => 76,
                'nim' => '531414081',
                'kodemakul' => '531410513',
                'namamakul' => 'ALGORITMA DAN STRUKTUR DATA 1',
                'pa' => '0008127805',
                'setujui' => 0,
                'tahun' => '2017',
                'semester' => '1',
                'created_at' => '2017-02-08 07:33:59',
                'updated_at' => '2017-02-08 07:33:59',
            ),
        ));
        
        
    }
}
