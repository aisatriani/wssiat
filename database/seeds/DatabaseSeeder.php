<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('LokasiDosenTableSeeder');
        $this->call('FakultasTableSeeder');
        $this->call('JurusanTableSeeder');
        $this->call('KontrakKrsTableSeeder');
        $this->call('MahasiswaTableSeeder');
        $this->call('ProdiTableSeeder');
        $this->call('UpdateLokasiTableSeeder');
        $this->call('UsersTableSeeder');
    }
}
