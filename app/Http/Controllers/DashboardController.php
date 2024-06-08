<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('dashboard.dashboard', compact('pendaftarans'));
    }

    public function create(){
        return view('dashboard.formCreate');
    }

    public function store(Request $request)
    {
        
    
        if ($request->id_pelanggan === "null") {
    
        Pendaftaran::create([
            'id_pelanggan' => null,
            'nama_bunda' => $request->nama_bunda,
            'nama_ananda' => $request->nama_ananda,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);


        return redirect()->route('dashboard');
    }else { 
    
            $affected = DB::table('pendaftaran')
                          ->where('id_pelanggan', $request->id_pelanggan)
                          ->update([
                              'nama_bunda' => $request->nama_bunda,
                              'nama_ananda' => $request->nama_ananda,
                              'no_hp' => $request->no_hp,
                              'alamat' => $request->alamat,
                          ]);
                          
     
            if ($affected) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->back()->with('status', 'Data not found!')->with('error', true);
            }
    }
}



public function find(Request $request)
{
    $id_pelanggan = $request->input('id_pendaftaran');

    // Cari data pelanggan berdasarkan ID
    $pelanggan = DB::table('pendaftaran')->where('id_pelanggan', $id_pelanggan)->first();

    return response()->json($pelanggan);

}
    
}
   







