@extends('layouts.admin')
@section('header', 'Report')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h3 class="card-title">Laporan Penjualan Barang</h3>
            </div>
            <div class="card-body p-0">
                @include('menu/report.content', ['items' => $items])
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        //message with toastr
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endpush
