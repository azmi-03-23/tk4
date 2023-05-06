@extends('layouts.admin')
@section('header', 'Report')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="card-title">Laporan Penjualan Barang</h3>
            </div>
            <div class="card-body p-0">
                @include('menu/report.content')
            </div>
        </div>
    </div>
@endsection

