<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanpetanisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuanpetanis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable($value = true);
            $table->string('namaproyek')->nullable($value = true);
            $table->integer('luaslahan')->nullable($value = true);
            $table->string('satuan')->nullable($value = true);
            $table->string('jenistanaman')->nullable($value = true);
            $table->string('alamat')->nullable($value = true);
            $table->integer('jangkawaktu')->nullable($value = true);
            $table->string('surattanah')->nullable($value = true);
            $table->string('NPWP')->nullable($value = true);
            $table->integer('check')->default(0);
            $table->string('gambar1')->nullable($value = true);
            $table->string('gambar2')->nullable($value = true);
            $table->string('gambar3')->nullable($value = true);
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
            $table->integer('2survivalrate')->nullable($value = true);
            $table->integer('2satuanbibit')->nullable($value = true);
            $table->integer('2satuanjadi')->nullable($value = true);
            $table->integer('2totaljadi')->nullable($value = true);
            $table->integer('2hargajual')->nullable($value = true);
            $table->integer('2totalpenerimaan')->nullable($value = true);
            $table->integer('3lababersih')->nullable($value = true);
            $table->integer('3bagihasil')->nullable($value = true);
            $table->integer('3jumlah')->nullable($value = true);
            $table->decimal('4roi', 8, 2)->nullable($value = true);
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
        Schema::dropIfExists('pengajuanpetanis');
    }
}
