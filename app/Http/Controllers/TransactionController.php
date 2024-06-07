<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaction::select('transaksi.*', 'pendaftaran.nama_bunda', 'pendaftaran.nama_ananda')
        ->join('pendaftaran', 'transaksi.id_pelanggan', '=', 'pendaftaran.id_pelanggan')
        ->get();
        
        return view('transaction.transaction', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('transaction.formCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaction::create([
            'tanggal' => $request->tanggal,
            'id_pelanggan' => $request->id_pelanggan,
            'tinggi_badan_cm' => $request->tinggi_badan,
            'berat_badan_kg' => $request->berat_badan,
            'usia_tahun' => $request->usia_tahun,
            'usia_bulan' => $request->usia_bulan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'layanan' => implode(", ", $request->layanan),
            'pilih_layanan' => $request->pilih_layanan,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'terapis' => $request->terapis
        ]);
            return redirect()->route('transaksi')->with('success', 'Pemesanan created successfully.');
        }

        public function cariPelanggan(Request $request)
        {
            $id_pelanggan = $request->input('id_pelanggan');
            $pelanggan = DB::table('pendaftaran')->where('id_pelanggan', $id_pelanggan)->first();
        
            // Jika data pelanggan ditemukan, kembalikan respons JSON
            if ($pelanggan) {
                return response()->json([
                    'nama_bunda' => $pelanggan->nama_bunda,
                    'nama_ananda' => $pelanggan->nama_ananda
                ]);
            }
        
            // Jika tidak ditemukan, kembalikan respons kosong
            return response()->json([]);
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
