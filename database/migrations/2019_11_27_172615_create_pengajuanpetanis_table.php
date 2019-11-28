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
            $table->integer('aberatpupuk')->nullable($value = true);
            $table->integer('asatuanpupuk')->nullable($value = true);
            $table->integer('atotalpupuk')->nullable($value = true);
            $table->integer('aberatbibit')->nullable($value = true);
            $table->integer('asatuanbibit')->nullable($value = true);
            $table->integer('atotalbibit')->nullable($value = true);
            $table->integer('atotaloperasional')->nullable($value = true);
            $table->integer('ajumlahkaryawan')->nullable($value = true);
            $table->integer('asatuankaryawan')->nullable($value = true);
            $table->integer('atotalkaryawan')->nullable($value = true);
            $table->integer('asewalahan')->nullable($value = true);
            $table->integer('atotalperalatan')->nullable($value = true);
            $table->integer('atotalsemua')->nullable($value = true);
            $table->integer('bsurvivalrate')->nullable($value = true);
            $table->integer('bsatuanbibit')->nullable($value = true);
            $table->integer('bsatuanjadi')->nullable($value = true);
            $table->integer('btotaljadi')->nullable($value = true);
            $table->integer('bhargajual')->nullable($value = true);
            $table->integer('btotalpenerimaan')->nullable($value = true);
            $table->integer('clababersih')->nullable($value = true);
            $table->integer('cbagihasil')->nullable($value = true);
            $table->integer('cjumlah')->nullable($value = true);
            $table->decimal('droi', 8, 2)->nullable($value = true);
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
