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
        Schema::create('depositos', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->bigInteger('id_user');
            $table->string('nomor_rekening');
            $table->decimal('nominal_penempatan', 15, 2);
            $table->integer('jangka_waktu');
            $table->date('tanggal_pembukaan');
            $table->date('tanggal_jatuh_tempo');
            $table->decimal('rate_bunga', 5, 2);
            $table->decimal('nominal_bunga', 15, 2);
            $table->string('status');
            $table->boolean('perpanjangan_otomatis')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depositos');
    }
};
