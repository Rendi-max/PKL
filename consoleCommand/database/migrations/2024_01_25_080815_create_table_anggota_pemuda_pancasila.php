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
        Schema::create('anggota_pemuda_pancasila', function (Blueprint $table) {
            $table->uuid('anggota_pemuda_pancasila_id')->primary()->autoIncrement();
            $table->string('nama');
            $table->string('wilayah_id');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->enum('status',[1,2]);
            $table->date('tanggal_bergabung');
            $table->timestamp('dibuat_pada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_anggota_pemuda_pancasila');
    }
};
