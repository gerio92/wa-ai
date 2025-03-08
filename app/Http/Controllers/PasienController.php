<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function getPasien(Request $request)
{
    $pasien = Pasien::where('nomrm', $request->nomrm)->first();

    if ($pasien) {
        return response()->json([
            'status' => 'success',
            'nama_pasien' => $pasien->nama_pasien,
            'nik' => $pasien->nik,
            'alamat' => $pasien->alamat
        ]);
    } else {
        return response()->json(['status' => 'error']);
    }
}

}
