<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index()
    {
        return view('daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomrm' => 'required|unique:pasien,nomrm|max:20',
            'nama_pasien' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16|unique:pasien,nik',
            'gender' => 'required|in:L,P', // Gunakan L dan P
            'alamat' => 'required|string',
            'email' => 'nullable|email|unique:pasien,email',
            'phone' => 'required|numeric|digits_between:10,15'
        ]);
        dd($request->all());

        try {
            $pasien = new Pasien([
                'nomrm' => $request->nomrm,
                'nama_pasien' => $request->nama_pasien,
                'nik' => $request->nik,
                'gender' => $request->gender,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

            if ($pasien->save()) {
                return redirect()->route('pasien.index')->with('success', 'Pasien berhasil didaftarkan.');
            } else {
                return back()->with('error', 'Gagal menyimpan data.');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

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