@extends('layouts.theme')

@section('title', 'Dashboard')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Point Of Sale</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">Pendaftaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/transaksi">Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keuangan">Keuangan</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Print</button>
        </form>
        <div class="form-inline my-2 my-lg-0">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="btn btn-primary my-2 my-sm-0" style="margin-left: 12px;" href="{{ route('logout') }}" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        
</div>
    </div>
</nav>

@yield('body')
@endsection