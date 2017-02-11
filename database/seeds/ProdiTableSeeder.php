<?php

use Illuminate\Database\Seeder;

class ProdiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prodi')->delete();
        
        \DB::table('prodi')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kodejur' => '22401',
                'kodeprodi' => '22401',
                'prodi' => 'D3 - TEKNIK SIPIL',
                'created_at' => '2017-02-03 08:26:53',
                'updated_at' => '2017-02-03 08:26:53',
            ),
            1 => 
            array (
                'id' => 2,
                'kodejur' => '22401',
                'kodeprodi' => '22201',
                'prodi' => 'S1 - TEKNIK SIPIL',
                'created_at' => '2017-02-03 08:30:02',
                'updated_at' => '2017-02-03 08:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'kodejur' => '22401',
                'kodeprodi' => '83205',
                'prodi' => 'S1 - PENDIDIKAN TEKNIK BANGUNAN',
                'created_at' => '2017-02-03 08:30:04',
                'updated_at' => '2017-02-03 08:30:04',
            ),
            3 => 
            array (
                'id' => 4,
                'kodejur' => '20401',
                'kodeprodi' => '20401',
                'prodi' => 'D3 - TEKNIK ELEKTRONIKA',
                'created_at' => '2017-02-03 08:30:04',
                'updated_at' => '2017-02-03 08:30:04',
            ),
            4 => 
            array (
                'id' => 5,
                'kodejur' => '20401',
                'kodeprodi' => '20201',
                'prodi' => 'S1 - TEKNIK ELEKTRO',
                'created_at' => '2017-02-03 08:30:05',
                'updated_at' => '2017-02-03 08:30:05',
            ),
            5 => 
            array (
                'id' => 6,
                'kodejur' => '57401',
                'kodeprodi' => '57401',
                'prodi' => 'D3 - MANAJEMEN INFORMATIKA',
                'created_at' => '2017-02-03 08:30:07',
                'updated_at' => '2017-02-03 08:30:07',
            ),
            6 => 
            array (
                'id' => 7,
                'kodejur' => '57401',
                'kodeprodi' => '57201',
                'prodi' => 'S1 - SISTEM INFORMASI',
                'created_at' => '2017-02-03 08:30:12',
                'updated_at' => '2017-02-03 08:30:12',
            ),
            7 => 
            array (
                'id' => 8,
                'kodejur' => '57401',
                'kodeprodi' => '83207',
                'prodi' => 'S1 - PENDIDIKAN TEKNOLOGI INFORMASI',
                'created_at' => '2017-02-03 08:30:18',
                'updated_at' => '2017-02-03 08:30:18',
            ),
            8 => 
            array (
                'id' => 9,
                'kodejur' => '88210',
                'kodeprodi' => '90411',
                'prodi' => 'D3 - KRIYA KAIN',
                'created_at' => '2017-02-03 08:30:19',
                'updated_at' => '2017-02-03 08:30:19',
            ),
            9 => 
            array (
                'id' => 10,
                'kodejur' => '88210',
                'kodeprodi' => '90417',
                'prodi' => 'D3 - KRIYA SENI',
                'created_at' => '2017-02-03 08:30:20',
                'updated_at' => '2017-02-03 08:30:20',
            ),
            10 => 
            array (
                'id' => 11,
                'kodejur' => '88210',
                'kodeprodi' => '88210',
                'prodi' => 'S1 - PENDIDIKAN SENI RUPA',
                'created_at' => '2017-02-03 08:30:20',
                'updated_at' => '2017-02-03 08:30:20',
            ),
            11 => 
            array (
                'id' => 12,
                'kodejur' => '23401',
                'kodeprodi' => '23401',
                'prodi' => 'D3 - ARSITEKTUR',
                'created_at' => '2017-02-03 08:30:22',
                'updated_at' => '2017-02-03 08:30:22',
            ),
            12 => 
            array (
                'id' => 13,
                'kodejur' => '23401',
                'kodeprodi' => '23201',
                'prodi' => 'S1 - TEKNIK ARSITEKTUR',
                'created_at' => '2017-02-03 08:30:23',
                'updated_at' => '2017-02-03 08:30:23',
            ),
            13 => 
            array (
                'id' => 14,
                'kodejur' => '26401',
                'kodeprodi' => '26401',
                'prodi' => 'D3 - TEKNIK INDUSTRI',
                'created_at' => '2017-02-03 08:30:25',
                'updated_at' => '2017-02-03 08:30:25',
            ),
            14 => 
            array (
                'id' => 15,
                'kodejur' => '26401',
                'kodeprodi' => '26201',
                'prodi' => 'S1 - TEKNIK INDUSTRI',
                'created_at' => '2017-02-03 08:30:27',
                'updated_at' => '2017-02-03 08:30:27',
            ),
            15 => 
            array (
                'id' => 16,
                'kodejur' => '26401',
                'kodeprodi' => '83203',
                'prodi' => 'S1 - PENDIDIKAN TEKNIK MESIN',
                'created_at' => '2017-02-03 08:30:28',
                'updated_at' => '2017-02-03 08:30:28',
            ),
        ));
        
        
    }
}
