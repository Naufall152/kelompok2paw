@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0" style="border-radius: 15px;">
        <div class="card-header text-white" style="background-color: #ffa500; border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <h3 class="mb-0 text-center">Detail Donasi Tunai</h3>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="mb-3" style="color: #333;">Informasi Donatur</h5>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th style="width: 40%; color: #555;">Nama</th>
                                <td style="color: #333;">{{ $donasi->nama }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%; color: #555;">Pesan</th>
                                <td style="color: #333;">{{ $donasi->pesan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-3" style="color: #333;">Informasi Donasi</h5>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th style="width: 40%; color: #555;">Jumlah Donasi</th>
                                <td style="color: #333;">Rp {{ number_format($donasi->jumlah_donasi, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%; color: #555;">Opsi Pembayaran</th>
                                <td style="color: #333;">{{ $donasi->opsi_pembayaran }}</td>
                            </tr>
                            <tr>
                                <th style="width: 40%; color: #555;">Tanggal Donasi</th>
                                <td style="color: #333;">{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('list.donasi') }}" class="btn btn-outline-secondary btn-lg" style="border-radius: 25px;">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
