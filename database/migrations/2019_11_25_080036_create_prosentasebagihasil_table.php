<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProsentasebagihasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosentasebagihasil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('pendapatanperproduksi')->nullable($value = true);
            $table->integer('bagihasil')->nullable($value = true);
            $table->integer('jumlah')->nullable($value = true);
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
        Schema::dropIfExists('prosentasebagihasil');
    }
}
