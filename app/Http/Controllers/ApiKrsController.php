<?php

namespace App\Http\Controllers;

use App\KontrakKrs;
use Illuminate\Http\Request;

class ApiKrsController extends Controller
{
    public function getKrs(Request $request)
    {

        $tahun = $request->input('tahun','');
        $semester = $request->input('semester','');
        $nim = $request->input('nim');

        $kontrak = KontrakKrs::whereTahun($tahun)
                    ->whereSemester($semester)
                    ->whereNim($nim)->get();

        return $kontrak;
    }
}
