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

        $siat = Api::getService('login_mahasiswa',$param);

        return $siat;
     }
}
