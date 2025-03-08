<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function getDokter(Request $request)
    {
        $dokters = Dokter::where('id_poli', $request->id_poli)->get();
        return response()->json(['dokters' => $dokters]);
    }
}

