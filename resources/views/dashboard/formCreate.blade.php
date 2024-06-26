@extends('layouts.theme')

@section('title', 'Form Pendaftaran')


@section('content')

<div class="container">
        <div style="background-color: #FFE0A0;" class="card mt-5">
            <div class="card-header">
                <h1>Form Pendaftaran</h1>
            </div>
            <div class="card-body">
                <form id="searchForm" action="{{ route('findCustomer') }}" method="GET">
                    <div class="form-group">
                        <label for="id_pelanggan">ID Pelanggan:</label>
                        <input type="text" class="form-control" id="id_pendaftaran" name="id_pendaftaran">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="searchCustomer()">Cari</button>
                </form>
            </div>
        </div>
        <div style="background-color: #FFE0A0;" class="card mt-3" id="customerDetails" >
            <div class="card-header">
                <h1>Data Pelanggan</h1>
            </div>
            <div class="card-body">
                <form id="registrationForm" action="{{ route('dashboardController.store') }}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control" id="id_pelanggan" value="null" name="id_pelanggan">
                    <div class="form-group">
                        <label for="nama_bunda">Nama Bunda:</label>
                        <input type="text" class="form-control" id="nama_bunda" name="nama_bunda">
                    </div>
                    <div class="form-group">
                        <label for="nama_ananda">Nama Ananda:</label>
                        <input type="text" class="form-control" id="nama_ananda" name="nama_ananda">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP:</label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        function searchCustomer() {
            const isEmpty = (obj) => {
                return JSON.stringify(obj) === '{}';
            };
            var id_pelanggan = document.getElementById("id_pendaftaran").value;

            fetch("{{ route('findCustomer') }}?id_pendaftaran=" + id_pelanggan)
                .then(response => response.json())
                .then(data => {
                 

                    if (!isEmpty(data)) {
                        document.getElementById("id_pelanggan").value = data.id_pelanggan;
                        document.getElementById("nama_bunda").value = data.nama_bunda;
                        document.getElementById("nama_ananda").value = data.nama_ananda;
                        document.getElementById("no_hp").value = data.no_hp;
                        document.getElementById("alamat").value = data.alamat;
                        ;
                    } else {
                       
                        document.getElementById("id_pelanggan").value = "null";
                        document.getElementById("id_pendaftaran").value = "";
                        document.getElementById("nama_bunda").value = "";
                        document.getElementById("nama_ananda").value = "";
                        document.getElementById("no_hp").value = "";
                        document.getElementById("alamat").value = "";
                   
                        alert("Data pelanggan tidak ditemukan.");
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

@endsection