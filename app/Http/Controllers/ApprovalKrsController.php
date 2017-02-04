<?php

namespace App\Http\Controllers;

use App\Api;
use App\KontrakKrs;
use Illuminate\Http\Request;

class ApprovalKrsController extends Controller
{
    public function index()
    {
        $kontrak = KontrakKrs::wherePa(session('nidn'))
                ->groupBy('nim')->get();

        return view('approval.index',compact('kontrak'));

    }
    public function show($nim)
    {
        $kontrak = KontrakKrs::whereNim($nim)
            ->orderBy('setujui','ASC')
            ->get();

        return view('approval.daftar',compact('kontrak'));
    }

    public function setujui(Request $request)
    {
        $input = $request->all();
        $mNim = '';
        //dd($input);
        foreach ($input['setujui'] as $nim=>$kodemks){
            //dd($kodemks);
            foreach ($kodemks as $kodemk=>$val){
                $k = KontrakKrs::where('nim',$nim)->where('kodemakul',$kodemk)->first();
                $k->setujui = 1;
                $k->save();
            }

            $mNim = $nim;
        }

        return redirect(url('approve',$mNim));
    }

    public function getNamaMhs($nim)
    {
        $param['nim'] = $nim;
        $res = Api::getService('cari_mahasiswa',$param);

        return $res['data']['NAMA'];
    }
}
