<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class DemoKrsController extends Controller
{
    public function index(Request $request)
    {
        $param['tahun'] = $request->input('tahun','');
        $param['semester'] = $request->input('semester','');
        $param['kodeprodi'] = $request->input('kodeprodi','');
        $response = Api::getService('getallkurikulum',$param);
        $id = 1;
        return view('krs.index',compact('response','id'));
    }
}
