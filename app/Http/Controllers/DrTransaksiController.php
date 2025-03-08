<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrTransaksi;
use App\Models\Poli;
use App\Models\Dokter;
use App\Models\Pasien;

class DrTransaksiController extends Controller
{
    public function index(Request $request)
    {
        $queues = DrTransaksi::with([
            'dokter:id_dokter,nama_dokter',
            'poli:id_poli,nama_poli',
            'pasien:id_pasien,nama_pasien',
            'praktekDokter:id_praktek,nama_praktek'
        ])
            ->select('id_trdokter', 'id_dokter', 'id_poli', 'id_pasien', 'id_praktek_dokter', 'tgl_praktek', 'antrian', 'created_at')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        

        $polis = Poli::all();

        return view('antri', compact('queues', 'polis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomrm' => 'required',
            'noregister' => 'required',
            'poli_tujuan' => 'required',
            'nama_dokter' => 'required',
            'id_praktek_dokter' => 'required',
        ]);
        $pasien = Pasien::where('nomrm', $request->nomrm)->first();
        if (!$pasien) {
            return redirect()->back()->with('error', 'Pasien tidak ditemukan.');
        }
        DrTransaksi::create([
            'id_pasien' => $pasien->id_pasien,
            'id_poli' => $request->poli_tujuan,
            'id_dokter' => $request->nama_dokter,
            'tgl_praktek' => $request->tgl_praktek,
            'antrian' => $request->antrian,
            'id_praktek_dokter' => $request->id_praktek_dokter,
            'waktu_jam' => $request->id_praktek_dokter == 1 ? $request->waktu_jam : null,
            'waktu_pending' => $request->id_praktek_dokter == 2 ? $request->waktu_pending : null,
            'name_user' => auth()->check() ? auth()->user()->name_user : 'Admin',
            'noregister' => $request->noregister,
            'nmpasien' => $pasien->nama_pasien,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
