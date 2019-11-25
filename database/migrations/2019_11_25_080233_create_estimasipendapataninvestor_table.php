<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimasipendapataninvestorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimasipendapataninvestor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('banyakbagihasildana')->nullable($value = true);
            $table->integer('bagihasildana')->nullable($value = true);
            $table->integer('totalbagihasildana')->nullable($value = true);
            $table->decimal('profitperpanen', 8, 2)->nullable($value = true);
            $table->decimal('totalprofitperpanen', 8, 2)->nullable($value = true);
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
        Schema::dropIfExists('estimasipendapataninvestor');
    }
}
