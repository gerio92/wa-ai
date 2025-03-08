<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\DrTransaksi;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Poli;

class TransaksiController extends Controller
{
    public function getPasien($noregister)
    {
        $drTransaksi = DrTransaksi::where('noregister', $noregister)->first();

        if (!$drTransaksi) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'pasien' => Pasien::find($drTransaksi->id_pasien),
            'tanggal_pemeriksaan' => $drTransaksi->tgl_praktek ?? '',
            'dokter' => Dokter::find($drTransaksi->id_dokter),
            'poli' => Poli::find($drTransaksi->id_poli),
            'antrian' => $drTransaksi->antrian ?? ''
        ]);
    }

    public function saveTransaksi(Request $request)
    {
        $validated = $request->validate([
            'noregister'   => 'required|exists:drtransaksi,noregister',
            'id_pasien'    => 'required|exists:pasien,id_pasien',
            'id_poli'      => 'required|exists:poli,id_poli',
            'id_dokter'    => 'required|exists:dokter,id_dokter',
            'diagnosa'     => 'nullable|string|max:100',
            'total_harga'  => 'required|numeric|min:0',
        ]);

        DB::beginTransaction();

        try {
            $poin = floor($validated['total_harga'] / 200000);

            $transaksi = new Transaksi();
            $transaksi->noregister = $validated['noregister'];
            $transaksi->id_pasien = $validated['id_pasien'];
            $transaksi->id_poli = $validated['id_poli'];
            $transaksi->id_dokter = $validated['id_dokter'];
            $transaksi->diagnosa = $validated['diagnosa'] ?? null;
            $transaksi->total_harga = $validated['total_harga'];
            $transaksi->poin = $poin;
            $transaksi->name_user = auth()->check() ? auth()->user()->name_user : 'Admin';
            $transaksi->save();

            $pasien = Pasien::find($validated['id_pasien']);
            if ($pasien) {
                $pasien->poin += $poin;
                $pasien->save();
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Transaksi berhasil disimpan dan point pasien diupdate.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
