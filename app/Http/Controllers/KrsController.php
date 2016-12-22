<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function getKrs($tahun, $semester, $nim){
        $param['tahun'] = $tahun;
        $param['semester'] = $semester;
        $param['nim'] = $nim;
        $response = Api::getService('getallkrs',$param);

        return $response;
    }

    public function getMahasiswa($nim){
        //$param['tahun'] = $tahun;
        //$param['semester'] = $semester;
        $param['nim'] = $nim;
        $response = Api::getService('cari_mahasiswa',$param);

        $dosenpa = $response['data']['DOSENPA'];

        foreach ($dosenpa as $k=>$v){
            $response['data']['DOSENPA']['NIDN'] = $k;
            $response['data']['DOSENPA']['NAMA'] = $v;
        }

        return $response;
    }

    public function getMahasiswaBimbingan($nidn)
    {

    }
}
