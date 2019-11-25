<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaoperasionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayaoperasional', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komponen')->nullable($value = true);
            $table->integer('kebutuhan')->nullable($value = true);
            $table->string('satuan')->nullable($value = true);
            $table->integer('hargasatuan')->nullable($value = true);
            $table->integer('jumlah')->nullable($value = true);
            $table->integer('total')->nullable($value = true);
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
        Schema::dropIfExists('biayaoperasional');
    }
}
