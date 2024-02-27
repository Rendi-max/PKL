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
        Schema::create('wilayah_mata_uangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('wilayah_id')->unsigned();
            $table->foreign('wilayah_id')->references('id')->on('wilayahs')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama_mata_uang');
            $table->string('uang_ke_dolar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_mata_uangs');
    }
};
