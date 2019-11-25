<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksiroiinvestorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyeksiroiinvestor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('roiperkontrak', 8, 2)->nullable($value = true);
            $table->decimal('roiperbagihasil', 8, 2)->nullable($value = true);
            $table->decimal('roiperbulan', 8, 2)->nullable($value = true);
            $table->integer('nilaiinvestasi')->nullable($value = true);
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
        Schema::dropIfExists('proyeksiroiinvestor');
    }
}
