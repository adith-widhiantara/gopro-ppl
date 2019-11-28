<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaoperasionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayaoperasionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('1beratpupuk')->nullable($value = true);
            $table->integer('1satuanpupuk')->nullable($value = true);
            $table->integer('1totalpupuk')->nullable($value = true);
            $table->integer('1beratbibit')->nullable($value = true);
            $table->integer('1satuanbibit')->nullable($value = true);
            $table->integer('1totalbibit')->nullable($value = true);
            $table->integer('1totaloperasional')->nullable($value = true);
            $table->integer('1jumlahkaryawan')->nullable($value = true);
            $table->integer('1satuankaryawan')->nullable($value = true);
            $table->integer('1totalkaryawan')->nullable($value = true);
            $table->integer('1sewalahan')->nullable($value = true);
            $table->integer('1totalperalatan')->nullable($value = true);
            $table->integer('1totalsemua')->nullable($value = true);
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
        Schema::dropIfExists('biayaoperasionals');
    }
}
