<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tunai', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('pesan');
            $table->decimal('jumlah_donasi', 10, 2);
            $table->string('opsi_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tunai');
    }
};
