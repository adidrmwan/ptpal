<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspeksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspeksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('tipe_crane');
            $table->string('nama_mesin');
            $table->string('bengkel');
            $table->string('shift_hour');
            $table->date('tgl_inspeksi');
            $table->text('catatan');
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
        Schema::dropIfExists('inspeksi');
    }
}
