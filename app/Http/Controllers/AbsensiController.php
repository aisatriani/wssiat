<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function getAbsensi(Request $request){

        $param['tahun'] = $request->input('tahun','');
        $param['semester'] = $request->input('semester','');
        $param['kodeprodi'] = $request->input('kodeprodi','57201');
        $param['idmakul'] = $request->input('idmakul','');
        $param['kelas'] = $request->input('kelas','');
        $param['nim'] = $request->input('nim','');

        $response = Api::getService('getallabsensikuliah',$param);

        return $response;

    }
}
