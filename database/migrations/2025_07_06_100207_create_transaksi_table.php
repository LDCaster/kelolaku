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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('akun_roblox_id')->constrained('akun_roblox')->onDelete('cascade');
            $table->foreignId('kategori_game_id')->constrained('kategori_game')->onDelete('cascade');
            $table->foreignId('item_game_id')->constrained('item_game')->onDelete('cascade');
            $table->enum('tipe_transaksi', ['masuk', 'keluar']);
            $table->integer('jumlah');
            $table->decimal('harga_satuan', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->text('keterangan')->nullable();
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
