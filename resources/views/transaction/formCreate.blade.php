@extends('layouts.theme')

@section('title', 'Form Pendaftaran')


@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Form Transaksi
        </div>
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="id_pelanggan">ID Pelanggan</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                        <div class="input-group-append">
                            <button class="btn btn-warning" id="cariPelanggan" type="button">Cari</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_bunda">Nama Bunda</label>
                    <input type="text" class="form-control" id="nama_bunda" name="nama_bunda" required>
                </div>
                <div class="form-group">
                    <label for="nama_ananda">Nama Ananda</label>
                    <input type="text" class="form-control" id="nama_ananda" name="nama_ananda" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                        <small class="form-text text-muted">CM</small>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                        <small class="form-text text-muted">KG</small>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="usia_tahun">Usia</label>
                        <input type="number" class="form-control" id="usia_tahun" name="usia_tahun" required>
                        <small class="form-text text-muted">TAHUN</small>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="usia_bulan">Usia</label>
                        <input type="number" class="form-control" id="usia_bulan" name="usia_bulan" required>
                        <small class="form-text text-muted">BULAN</small>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="Laki-Laki" required>
                            <label class="form-check-label" for="laki_laki">Laki-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Layanan</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="layanan[]" id="outlet" value="Outlet">
                            <label class="form-check-label" for="outlet">Outlet</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="layanan[]" id="homecare" value="Homecare">
                            <label class="form-check-label" for="homecare">Homecare</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pilih_layanan">Pilih Layanan</label>
                    <input type="text" class="form-control" id="pilih_layanan" name="pilih_layanan" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="terapis">Terapis</label>
                    <input type="text" class="form-control" id="terapis" name="terapis" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-warning">Cetak Kartu</button>
            </form>
        </div>
    </div>
</div>

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('cariPelanggan').addEventListener('click', function() {
            var id_pelanggan = document.getElementById('id_pelanggan').value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/pencarian_pelanggan?id_pelanggan=' + id_pelanggan, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                   
                    if (response.nama_bunda !== undefined) {
                        document.getElementById('nama_bunda').value = response.nama_bunda;
                        document.getElementById('nama_ananda').value = response.nama_ananda;
                    } else {
                        document.getElementById('nama_bunda').value = "";
                        document.getElementById('nama_ananda').value = "";
                        document.getElementById('id_pelanggan').value = "";
                        alert('data tidak ditemukan');
                    }
                   
                }
            };
            xhr.send();
        });
    });
</script>