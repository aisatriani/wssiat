<?php

namespace App\Http\Controllers;

use App\Api;
use App\KontrakKrs;
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
        //dd ($response);
        return view('krs.index',compact('response','id'));
    }

    public function filterKrs(Request $request)
    {
        return view('krs.filterkrs');
    }

    public function storeKrs(Request $request)
    {
        $input = $request->all();

        foreach ($input['kodemakul'] as $kdmkl){
            $kontrak = new KontrakKrs();
            $kontrak->nim = session('nim');
            $kontrak->kodemakul = $kdmkl;
            $kontrak->pa = session('pa');

            $cek = KontrakKrs::where('nim',session('nim'))->where('kodemakul',$kdmkl)->first();
            if(!$cek){
                $kontrak->save();
            }

        }

        return "berhasil";
    }


}
