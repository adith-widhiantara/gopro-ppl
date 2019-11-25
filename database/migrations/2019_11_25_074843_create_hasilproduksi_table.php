<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilproduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasilproduksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('totalbobot')->nullable($value = true);
            $table->integer('survivalrate')->nullable($value = true);
            $table->integer('volumeproduksi')->nullable($value = true);
            $table->integer('hargaperkg')->nullable($value = true);
            $table->integer('totalpenerimaan')->nullable($value = true);
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
        Schema::dropIfExists('hasilproduksi');
    }
}
