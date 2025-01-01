@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Detail Donasi Makanan</h1>

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white text-center">
            <h4>Donasi dari: {{ $donasi->nama }}</h4>
        </div>
        <div class="card-body">
            <table class="table table-borderless">
                <tr>
                    <th>Nama</th>
                    <td>{{ $donasi->nama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $donasi->alamat }}</td>
                </tr>
                <tr>
                    <th>Nama Makanan</th>
                    <td>{{ $donasi->nama_makanan }}</td>
                </tr>
                <tr>
                    <th>Jenis Makanan</th>
                    <td>{{ $donasi->jenis_makanan }}</td>
                </tr>
                <tr>
                    <th>Opsi Pengiriman</th>
                    <td>{{ $donasi->opsi_pengiriman }}</td>
                </tr>
                <tr>
                    <th>Pesan</th>
                    <td>{{ $donasi->pesan ?? 'Tidak ada pesan' }}</td>
                </tr>
                <tr>
                    <th>Tanggal Donasi</th>
                    <td>{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('list.donasi') }}" class="btn btn-secondary">Kembali ke Daftar Donasi</a>
        </div>
    </div>
</div>
@endsection
