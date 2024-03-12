@extends('layouts.main')

@section('content')
<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>Hi, welcome back!</h4>
            <p class="mb-0">Selamat Datang di Kasir Okta!</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><strong>Produk</strong> </div>
                    <div class="stat-digit"> <i class="icon icon-app-store"></i>{{ $totalProduk }}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: {{ $produkPercentage }}%" aria-valuenow="{{ $produkPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><strong>Pelanggan</strong></div>
                    <div class="stat-digit"> <i class="fa fa-user"></i>{{ $totalPelanggan }}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary " role="progressbar" style="width: {{ $pelangganPercentage }}%"  aria-valuenow="{{ $pelangganPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text"><strong>Transaksi</strong></div>
                    <div class="stat-digit"> <i class="fa-solid fa-cart-plus"></i> {{ $totalTransaksi }}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning " role="progressbar" style="width: {{ $transaksiPercentage }}%" aria-valuenow="{{ $transaksiPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card">
            <div class="stat-widget-two card-body">
                <div class="stat-content">
                    <div class="stat-text">User</div>
                    <div class="stat-digit"> <i class="fa fa-user-plus"></i>{{ $totalUser }}</div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{ $userPercentage }}%" aria-valuenow="{{ $userPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
@endsection