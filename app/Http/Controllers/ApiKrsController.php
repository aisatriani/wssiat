<?php

namespace App\Http\Controllers;

use App\Api;
use App\KontrakKrs;
use App\Mahasiswa;
use Illuminate\Http\Request;

class ApiKrsController extends Controller
{
    public function getKrs(Request $request)
    {

        $tahun = $request->input('tahun','');
        $semester = $request->input('semester','');
        $nim = $request->input('nim');

        $kontrak = KontrakKrs::whereTahun($tahun)
                    ->whereSemester($semester)
                    ->whereNim($nim)->get();

        return $kontrak;
    }

    public function getMahasiswaBimbingan($nidn)
    {
        $mhs = Mahasiswa::whereDosenPaNidn($nidn)
            ->where('angkatan','>=',2010)
            ->where('status','A')
            ->orderBy('angkatan','desc')
            ->get();
        return $mhs;
    }

    public function getMahasiswaKontrak($nidn)
    {
        $kontrak = KontrakKrs::wherePa($nidn)
            ->groupBy('nim')->get();

        for($i = 0 ; $i < count($kontrak); $i++ ){
            $kontrak[$i]['nama'] = Api::getNamaMhs($kontrak[$i]->nim);
        }

        return $kontrak;
    }
}
