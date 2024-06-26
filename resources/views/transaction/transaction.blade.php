@extends('layouts.menu')

@section('title', 'Dashboard')

@section('body')

<div class="card mb-4" style="background-color: #FFE0A0; color: black; margin-left: 12px; margin-right: 12px; margin-top: 30px">
    <h2>Data Transaksi <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a></h2>
 
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                           
                            <th>Tanggal</th>
                            <th>ID Pelanggan</th>
                            <th>Tinggi Badan (cm)</th>
                            <th>Berat Badan (kg)</th>
                            <th>Usia (Tahun)</th>
                            <th>Usia (Bulan)</th>
                            <th>Jenis Kelamin</th>
                            <th>Layanan</th>
                            <th>Pilih Layanan</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Terapis</th>
                            <th>Nama Bunda</th>
                            <th>Nama Ananda</th>
                            <th>No HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksi as $trx)
                        <tr>
                       
                            <td>{{ $trx->tanggal }}</td>
                            <td>{{ $trx->id_pelanggan }}</td>
                            <td>{{ $trx->tinggi_badan_cm }}</td>
                            <td>{{ $trx->berat_badan_kg }}</td>
                            <td>{{ $trx->usia_tahun }}</td>
                            <td>{{ $trx->usia_bulan }}</td>
                            <td>{{ $trx->jenis_kelamin }}</td>
                            <td>{{ $trx->layanan }}</td>
                            <td>{{ $trx->pilih_layanan }}</td>
                            <td>{{ $trx->kategori }}</td>
                            <td>{{ $trx->harga }}</td>
                            <td>{{ $trx->terapis }}</td>
                            <td>{{ $trx->nama_bunda }}</td>
                            <td>{{ $trx->nama_ananda }}</td>
                            <td>{{ $trx->no_hp }}</td>
                            <td>
                                <a href="/invoice/<?= $trx->id; ?>" target="_blank" class="btn btn-primary">Cetak</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            
    </div>
</div>

@endsection
