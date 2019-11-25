<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanpetaniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuanpetani', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('luaslahan')->nullable($value = true);
            $table->string('tipetanaman')->nullable($value = true);
            $table->string('KTP')->nullable($value = true);
            $table->string('surattanah')->nullable($value = true);
            $table->string('NPWP')->nullable($value = true);
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
        Schema::dropIfExists('pengajuanpetani');
    }
}
