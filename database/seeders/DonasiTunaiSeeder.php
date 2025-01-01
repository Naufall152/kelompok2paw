<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DonasiTunaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('donasi_tunai')->insert([
            [
                'nama' => 'Ahmad',
                'pesan' => 'Semoga bermanfaat untuk semua.',
                'jumlah_donasi' => 100000,
                'opsi_pembayaran' => 'Transfer Bank',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti',
                'pesan' => 'Donasi kecil dari saya.',
                'jumlah_donasi' => 50000,
                'opsi_pembayaran' => 'Gopay',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rian',
                'pesan' => 'Semoga bisa membantu.',
                'jumlah_donasi' => 250000,
                'opsi_pembayaran' => 'Dana',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi',
                'pesan' => 'Untuk membantu yang membutuhkan.',
                'jumlah_donasi' => 150000,
                'opsi_pembayaran' => 'Ovo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi',
                'pesan' => 'Sumbangan ini dari keluarga kami.',
                'jumlah_donasi' => 300000,
                'opsi_pembayaran' => 'Transfer Bank',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
