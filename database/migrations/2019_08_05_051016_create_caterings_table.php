<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCateringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterings', function (Blueprint $table) {
            $table->increments('id_catering');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat_email')->unique();
            $table->text('alamat');
            $table->string('nomor_hp');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('status');
            $table->string('avatar');
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
        Schema::dropIfExists('caterings');
    }
}
