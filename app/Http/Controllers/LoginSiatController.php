<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class LoginSiatController extends Controller
{
    public function loginMahasiswa(Request $request)
    {
        $param['nim'] = $request->input('nim');
        $param['pwd'] = $request->input('pwd');

        $response = Api::getService('login_mahasiswa',$param);

        $dosenpa = $response['data']['DOSENPA'];

        foreach ($dosenpa as $k=>$v){
            $response['data']['DOSENPA']['NIDN'] = $k;
            $response['data']['DOSENPA']['NAMA'] = $v;
        }

        return $response;
     }

    public function loginDosen(Request $request)
    {
        $param['nidn'] = $request->input('nidn');
        $param['pwd'] = $request->input('pwd');

        $siat = Api::getService('getlogindosen',$param);
        return $siat;
    }
}
