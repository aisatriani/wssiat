<?php

namespace App\Http\Controllers;

use App\Api;
use App\LokasiDosen;
use Illuminate\Http\Request;

class ManageDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = 1;
        $param['kodefak'] = '05';
        //$param['kodejur'] = '57401';
        $response = Api::getService('getalldosen',$param);
        //dd($response);
        return view('dosen.index', compact('response','id'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $num = 1;

        $param['kodefak'] = '05';
        //$param['kodejur'] = '57401';
        $param['kodeprodi'] = $id;

        $response = Api::getService('getalldosen',$param);
        $data = $response['data'][0]['DOSEN'];
        $domisili = $this->getDomisili();
        return view('dosen.show', compact('data','num','domisili'));
    }

    public function postLocation(Request $request, $id)
    {
        $input = $request->all();
        //dd($input);
        $lokasi = LokasiDosen::findOrNew($id);
        $lokasi->nidn = $id;
        $lokasi->latitude = $input['latitude'];
        $lokasi->longitude = $input['longitude'];
        $lokasi->kabkot = $input['kabkot'];
        $lokasi->save();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getDomisili()
    {
        return [
            '' => '-- Pilih Domisili',
            'KOTA GORONTALO' => 'KOTA GORONTALO',
            'KAB. GORONTALO' => 'KAB. GORONTALO',
            'BONE BOLANGO' => 'BONE BOLANGO'
        ];
    }
}
