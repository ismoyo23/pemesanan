@extends('layouts.menu')

@section('title', 'Dashboard')

@section('body')

<!-- Card Element wrapping the container and table -->
<div class="card mb-4" style="background-color: #FFE0A0; color: black; margin-left: 12px; margin-right: 12px; margin-top: 30px">
  <div class="card-body">
    <h5 class="card-title">Customer Information</h5>
    <p class="card-text">Here you can manage customer data and add new customers.</p>
    
    <div class="container mt-3">
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
  </div>
</div>



@endsection