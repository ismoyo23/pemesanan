@extends('layouts.menu')

@section('title', 'Dashboard')

@section('body')

<div class="container mt-5">
    <h2>Data Transaksi <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a></h2>
    <div class="card">
        <div class="card-body">
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
