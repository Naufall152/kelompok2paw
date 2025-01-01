@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Detail Donasi Tunai</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $donasi->nama }}</td>
                    </tr>
                    <tr>
                        <th>Pesan</th>
                        <td>{{ $donasi->pesan }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Donasi</th>
                        <td>Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th>Opsi Pembayaran</th>
                        <td>{{ $donasi->opsi_pembayaran }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Donasi</th>
                        <td>{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <a href="{{ route('list.donasi') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
