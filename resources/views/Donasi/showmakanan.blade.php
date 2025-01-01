@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0" style="border-radius: 15px;">
        <!-- Header Card -->
        <div class="card-header text-white text-center" style="background-color: #ffa500; border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <h4 class="mb-0">Detail Donasi Makanan</h4>
        </div>

        <!-- Body Card -->
        <div class="card-body p-4">
            <div class="row">
                <!-- Informasi Donasi -->
                <div class="col-md-6">
                    <h5 class="mb-3" style="color: #333;">Informasi Donatur</h5>
                    <table class="table table-borderless">
                        <tr>
                            <th style="width: 40%; color: #555;">Nama</th>
                            <td style="color: #333;">{{ $donasi->nama }}</td>
                        </tr>
                        <tr>
                            <th style="width: 40%; color: #555;">Alamat</th>
                            <td style="color: #333;">{{ $donasi->alamat }}</td>
                        </tr>
                        <tr>
                            <th style="width: 40%; color: #555;">Pesan</th>
                            <td style="color: #333;">{{ $donasi->pesan ?? 'Tidak ada pesan' }}</td>
                        </tr>
                    </table>
                </div>

                <!-- Detail Makanan -->
                <div class="col-md-6">
                    <h5 class="mb-3" style="color: #333;">Detail Donasi</h5>
                    <table class="table table-borderless">
                        <tr>
                            <th style="width: 40%; color: #555;">Nama Makanan</th>
                            <td style="color: #333;">{{ $donasi->nama_makanan }}</td>
                        </tr>
                        <tr>
                            <th style="width: 40%; color: #555;">Jenis Makanan</th>
                            <td style="color: #333;">{{ $donasi->jenis_makanan }}</td>
                        </tr>
                        <tr>
                            <th style="width: 40%; color: #555;">Opsi Pengiriman</th>
                            <td style="color: #333;">{{ $donasi->opsi_pengiriman }}</td>
                        </tr>
                        <tr>
                            <th style="width: 40%; color: #555;">Tanggal Donasi</th>
                            <td style="color: #333;">{{ $donasi->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-4">
                <a href="{{ route('list.donasi') }}" class="btn btn-outline-secondary btn-lg" style="border-radius: 25px;">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Donasi
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
