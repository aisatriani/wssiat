<?php

namespace App\Http\Controllers;

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
}
