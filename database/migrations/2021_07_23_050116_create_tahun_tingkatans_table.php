<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTahunTingkatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahun_tingkatans', function (Blueprint $table) {
            $table->id();
            $table->string('umur');
            $table->string('peringkat');
            $table->string('negeri');
            $table->string('nama_sekolah');
            $table->string('jantina');
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
        Schema::dropIfExists('tahun_tingkatans');
    }
}
