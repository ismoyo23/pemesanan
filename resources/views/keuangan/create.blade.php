@extends('layouts.menu')

@section('title', 'Transaksi keluar')

@section('body')
<div class="container mt-5">
        <h2>Transaksi Keluar</h2>
        <form action="{{ route('keuangan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_transaksi" class="form-label">Nama Transaksi</label>
                <input type="text" class="form-control" id="nama_transaksi" name="nama_transaksi" required>
            </div>
            <div class="mb-3">
                <label for="nominal_transaksi" class="form-label">Nominal Transaksi</label>
                <input type="number" class="form-control" id="nominal_transaksi" name="nominal_transaksi" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_transaksi" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@endsection