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
        Schema::create('tb_supir', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Supir', 30);
            $table->string('Alamat', 50);
            $table->enum('Jenis_Kelamin', ['P', 'L']);
            $table->string('No_Telepon', 15);
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
        Schema::dropIfExists('tb_supir');
    }
};
