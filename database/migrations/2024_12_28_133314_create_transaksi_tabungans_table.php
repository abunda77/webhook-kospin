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
    Schema::create('transaksi_tabungans', function (Blueprint $table) {
        $table->bigInteger('id')->unique();
        $table->bigInteger('id_tabungan');
        $table->enum('jenis_transaksi', ['kredit', 'debit']);
        $table->decimal('jumlah', 15, 2);
        $table->datetime('tanggal_transaksi');
        $table->string('keterangan')->nullable();
        $table->string('kode_transaksi');
        $table->string('kode_teller', 50)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_tabungans');
    }
};
