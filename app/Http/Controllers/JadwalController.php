<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function getJadwal($nim){

        $param['nim'] = $nim;

        $response = Api::getService('jadwal_mahasiswa',$param);

        $data = $response['data'];

        $thn_akademik = explode("/",$data['TAHUNAKADEMIK']);
        $data['TAHUNAKADEMIK'] = $thn_akademik[0];
        $response['data'] = $data;
        return $response;

    }
}
