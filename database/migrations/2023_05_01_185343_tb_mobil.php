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
    public function up()
    {
        Schema::create('tb_mobil', function (Blueprint $table) {
            $table->string('id_mobil', 20)->primary();
            $table->string('Merk_Mobil', 50);
            $table->string('Jenis_Mobil', 20);
            $table->unsignedInteger('Tahun');
            $table->string('Warna', 20);
            $table->unsignedBigInteger('Harga_Sewa');
            $table->string('gambar');
            $table->string('status', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mobil');
    }
};
