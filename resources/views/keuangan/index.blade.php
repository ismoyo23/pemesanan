@extends('layouts.menu')

@section('title', 'Transaksi keluar')

@section('body')
    <div class="container">
        <h1>Keuangan List</h1>
        <a href="{{ route('keuangan.create') }}" class="btn btn-primary mb-3">Add Transaksi Keluar</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nominal Transaksi</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($keuangans as $keuangan)
                        <tr>
                            <td>{{ $keuangan->id }}</td>
                            <td>{{ $keuangan->nama_transaksi }}</td>
                            <td>{{ $keuangan->tanggal_transaksi }}</td>
                            <td>{{ $keuangan->nominal_transaksi }}</td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
