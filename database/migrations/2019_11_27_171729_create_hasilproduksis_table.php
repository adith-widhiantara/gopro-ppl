<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilproduksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilproduksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('2survivalrate')->nullable($value = true);
            $table->integer('2satuanbibit')->nullable($value = true);
            $table->integer('2satuanjadi')->nullable($value = true);
            $table->integer('2totaljadi')->nullable($value = true);
            $table->integer('2hargajual')->nullable($value = true);
            $table->integer('2totalpenerimaan')->nullable($value = true);
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
        Schema::dropIfExists('hasilproduksis');
    }
}
