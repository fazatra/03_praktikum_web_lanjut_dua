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
        // Schema::create('PengalamanKuliah', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('namaLengkap');
        //     $table->string('namaPanggilan');
        //     $table->integer('umur');
        //     $table->string('pesan');
            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PengalamanKuliah');
    }
};
