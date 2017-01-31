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

        $kontrak = KontrakKrs::where('nim',session('nim'))->where('tahun',$param['tahun'])->where('semester',$param['semester'])->get();


        return view('krs.index',compact('response','id','kontrak'));
    }

    public function filterKrs(Request $request)
    {
        return view('krs.filterkrs');
    }

    public function storeKrs(Request $request)
    {
        $input = $request->all();

        //dd($input);

        foreach ($input['kodemakul'] as $kdmkl){

            $arrMakul = explode('.',$kdmkl);

            $kontrak = new KontrakKrs();
            $kontrak->nim = session('nim');
            $kontrak->kodemakul = $arrMakul[0];
            $kontrak->namamakul = $arrMakul[1];
            $kontrak->tahun = $input['tahun'];
            $kontrak->semester = $input['semester'];
            $kontrak->pa = session('pa');

            $cek = KontrakKrs::where('nim',session('nim'))->where('kodemakul',$arrMakul[0])->first();
            if(!$cek){
                $kontrak->save();
            }

        }

        return redirect(url('krs').'?tahun='.$input['tahun'].'&semester='.$input['semester'].'&kodeprodi='.$input['kodeprodi'].'');
    }


}
