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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'loans_user_id');
            $table->string('nama');
            $table->string('tipe_pengajuan');
            $table->decimal('pendapatan_bulanan_nasabah', 9,0);
            $table->decimal('nominal_pengajuan', 9,0);
            $table->integer('tenor');
            $table->decimal('tagihan_nasabah', 9,0)->nullable();
            $table->string('tanggal_pengajuan');
            $table->string('catatan');
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
