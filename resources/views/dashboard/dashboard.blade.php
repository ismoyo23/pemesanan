@extends('layouts.menu')

@section('title', 'Dashboard')

@section('body')



<div class="container mt-5">
<h2>Data Customer <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah Customer</a></h2>
<table class="table table-striped">
        <thead>
            <tr>
                <th>Id Pelanggan</th>
                <th>Nama Bunda</th>
                <th>Nama Ananda</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pendaftarans as $pendaftaran)
            <tr>
                <td>{{ $pendaftaran->id_pelanggan }}</td>
                <td>{{ $pendaftaran->nama_bunda }}</td>
                <td>{{ $pendaftaran->nama_ananda }}</td>
                <td>{{ $pendaftaran->no_hp }}</td>
                <td>{{ $pendaftaran->alamat }}</td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</div>

@endsection