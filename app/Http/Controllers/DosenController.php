<?php

namespace App\Http\Controllers;

use App\Api;
use App\LokasiDosen;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class DosenController extends Controller
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
        $dosen = [];
        for($i = 0; $i < count($response['data']); $i++){
            for($j = 0; $j < count($response['data'][$i]['DOSEN']); $j++){
                $dosen[] = $response['data'][$i]['DOSEN'][$j];

            }
        }

        for ($x = 0; $x < count($dosen); $x++){
            $lokasi = LokasiDosen::where('nidn',$dosen[$x]['NIDN'])->first();
            if($lokasi){
                $dosen[$x]['LATITUDE'] = $lokasi->latitude;
                $dosen[$x]['LONGITUDE'] = $lokasi->longitude;
            }else{
                $dosen[$x]['LATITUDE'] = null;
                $dosen[$x]['LONGITUDE'] = null;
            }

        }

        return $dosen;
    }

    public function getProdi()
    {
        $id = 1;
        $param['kodefak'] = '05';
        //$param['kodejur'] = '57401';
        $response = Api::getService('getalldosen',$param);

        return $response;
    }

    public function getDosenByProdi($kdprodi)
    {
        $param['kodefak'] = '05';
        //$param['kodejur'] = '57401';
        $param['kodeprodi'] = $kdprodi;

        $response = Api::getService('getalldosen',$param);
        $dosen = $response['data'][0]['DOSEN'];

        for ($x = 0; $x < count($dosen); $x++){
            $lokasi = LokasiDosen::where('nidn',$dosen[$x]['NIDN'])->first();
            if($lokasi){
                $dosen[$x]['LATITUDE'] = $lokasi->latitude;
                $dosen[$x]['LONGITUDE'] = $lokasi->longitude;
            }else{
                $dosen[$x]['LATITUDE'] = null;
                $dosen[$x]['LONGITUDE'] = null;
            }

        }

        return $dosen;
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
        //
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
}
