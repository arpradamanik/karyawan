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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id('karyawanid');
            $table->string('karyawan_name');
            $table->string('karyawan_kebun');
            $table->string('karyawan_jenis');
            $table->string('karyawan_nomor');
            $table->string('karyawan_tanggal');
            $table->string('karyawan_masa');
            $table->string('foto');
            $table->integer('karyawan_status')->default(1);
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
        Schema::dropIfExists('karyawan');
    }
};
