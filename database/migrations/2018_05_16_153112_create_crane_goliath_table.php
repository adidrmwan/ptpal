<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCraneGoliathTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crane_goliath', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inspeksi');
            $table->text('ket_1');
            $table->text('ket_2');
            $table->text('ket_3');
            $table->text('ket_4');
            $table->text('ket_5');
            $table->text('ket_6');
            $table->text('ket_7');
            $table->text('ket_8');
            $table->text('ket_9');
            $table->text('ket_10');
            $table->text('ket_11');
            $table->text('ket_12');
            $table->text('ket_13');
            $table->integer('checklist_1');
            $table->integer('checklist_2');
            $table->integer('checklist_3');
            $table->integer('checklist_4');
            $table->integer('checklist_5');
            $table->integer('checklist_6');
            $table->integer('checklist_7');
            $table->integer('checklist_8');
            $table->integer('checklist_9');
            $table->integer('checklist_10');
            $table->integer('checklist_11');
            $table->integer('checklist_12');
            $table->integer('checklist_13');
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
        Schema::dropIfExists('crane_goliath');
    }
}
