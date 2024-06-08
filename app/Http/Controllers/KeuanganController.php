<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function create()
    {
        return view('keuangan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_transaksi' => 'required|string|max:255',
            'nominal_transaksi' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
        ]);

        Keuangan::create($validated);

        return redirect()->route('keuangan.index')->with('success', 'Transaksi berhasil disimpan.');
    }

    public function index()
    {
        $keuangans = Keuangan::all();
        return view('keuangan.index', compact('keuangans'));
    }

    public function show($id)
    {
        $transaksi = DB::select("
            SELECT 
                t.id,
                t.tanggal,
                t.id_pelanggan,
                p.nama_bunda,
                p.nama_ananda,
                t.tinggi_badan_cm,
                t.berat_badan_kg,
                t.usia_tahun,
                t.usia_bulan,
                t.jenis_kelamin,
                t.layanan,
                t.pilih_layanan,
                t.kategori,
                t.harga,
                t.terapis
            FROM 
                transaksi t
            JOIN 
                pendaftaran p 
            ON 
                t.id_pelanggan = p.id_pelanggan
            WHERE 
                t.id = ?
        ", [$id]);
        
       
        return view('transaction.invoice', compact('transaksi'));
    }

}
