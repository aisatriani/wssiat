<?php

namespace App\Http\Controllers;

use App\Api;
use App\Fakultas;
use App\Jurusan;
use App\Mahasiswa;
use App\Prodi;
use Illuminate\Http\Request;

class DumpController extends Controller
{
    public function storeAllData()
    {
        $param[] = '';
        $response = Api::getService('getallmahasiswa',$param);

        $hasil = [];
        foreach ($response['data'] as $data){
            $fakultas = Fakultas::findOrNew($data['KODEFAK']);
            $fakultas->kodefak = $data['KODEFAK'];
            $fakultas->fakultas = $data['FAKULTAS'];
            $fakultas->save();

            $jurusan = Jurusan::findOrNew($data['KODEJUR']);
            $jurusan->kodejur = $data['KODEJUR'];
            $jurusan->jurusan = $data['JURUSAN'];
            $jurusan->kodefak = $data['KODEFAK'];
            $jurusan->save();

            $prodi = Prodi::findOrNew($data['KODEPRODI']);
            $prodi->kodeprodi = $data['KODEPRODI'];
            $prodi->prodi = $data['PRODI'];
            $prodi->kodejur = $data['KODEJUR'];
            $prodi->save();

            foreach ($data['MAHASISWA'] as $maha){
                $mahasiswa = Mahasiswa::findOrNew($maha['NIM']);
                $mahasiswa->nim = $maha['NIM'];
                $mahasiswa->nama = $maha['NAMA'];
                $mahasiswa->kelas = $maha['KELAS'];
                $mahasiswa->kodeprodi = $data['KODEPRODI'];

                if(!empty($maha['DOSENPA']))
                foreach ($maha['DOSENPA'] as $k=>$v){
                    $mahasiswa->dosen_pa_nidn = $k;
                    $mahasiswa->dosen_pa_nama = $v;
                }
                else {
                    $mahasiswa->dosen_pa_nidn = "-";
                    $mahasiswa->dosen_pa_nama = "-";
                }

                $mahasiswa->save();
            }
        }

        return $response;
    }

}
