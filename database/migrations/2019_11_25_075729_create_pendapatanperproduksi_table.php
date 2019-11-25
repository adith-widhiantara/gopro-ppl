<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatanperproduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatanperproduksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('totalpenerimaan')->nullable($value = true);
            $table->integer('biayaoperasional')->nullable($value = true);
            $table->integer('lababersih')->nullable($value = true);
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
        Schema::dropIfExists('pendapatanperproduksi');
    }
}
