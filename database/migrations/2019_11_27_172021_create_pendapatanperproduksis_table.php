<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendapatanperproduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendapatanperproduksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('3lababersih')->nullable($value = true);
            $table->integer('3bagihasil')->nullable($value = true);
            $table->integer('3jumlah')->nullable($value = true);
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
        Schema::dropIfExists('pendapatanperproduksis');
    }
}
