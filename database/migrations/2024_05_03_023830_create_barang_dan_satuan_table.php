<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('satuan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_satuan')->unique();
            $table->string('nama_satuan');
            $table->timestamps();
        }); 

        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->text('deskripsi_barang')->nullable();
            $table->unsignedBigInteger('kode_satuan');
            $table->foreign('kode_satuan')->references('id')->on('satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
        Schema::dropIfExists('satuan');
    }
};
