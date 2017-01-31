<?php

namespace App\Http\Controllers;

use App\LokasiDosen;
use App\UpdateLokasi;
use Illuminate\Http\Request;

class UpdateLokasiController extends Controller
{
    public function getActiveLokasiDosen()
    {
        $lokasi = UpdateLokasi::where('active',1)->get();
        return $lokasi;
    }

    public function postUpdateLokasi(Request $request)
    {
        $input = $request->all();
        $lokasi = UpdateLokasi::findOrNew($input['nidn']);
        $lokasi->fill($input)->save();
        return $lokasi;
    }

    public function index()
    {
        $lokasidosen = UpdateLokasi::all();
        return view('dosen.lokasi', compact('lokasidosen'));
    }

    public function destroy($id)
    {
        $lokasi = UpdateLokasi::find($id);
        $lokasi->delete();

        return redirect(url('lokasidosen'));
    }
}
