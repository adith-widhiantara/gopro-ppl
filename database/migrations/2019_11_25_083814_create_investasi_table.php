<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable($value = true);
            $table->integer('pengajuanpetani_id')->nullable($value = true);
            $table->integer('biayaoperasional_id')->nullable($value = true);
            $table->integer('biayatetap_id')->nullable($value = true);
            $table->integer('hasilproduksi_id')->nullable($value = true);
            $table->integer('pendapatanperproduksi_id')->nullable($value = true);
            $table->integer('prosentasebagihasil_id')->nullable($value = true);
            $table->integer('estimasipendapataninvestor_id')->nullable($value = true);
            $table->integer('proyeksiroiinvestor_id')->nullable($value = true);
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
        Schema::dropIfExists('investasi');
    }
}
