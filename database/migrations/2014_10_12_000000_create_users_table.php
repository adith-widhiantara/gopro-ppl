<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable($value = true);
            $table->string('role')->nullable($value = true);
            $table->string('photo')->nullable($value = true);
            $table->string('tanggallahir')->nullable($value = true);
            $table->string('jeniskelamin')->nullable($value = true);
            $table->string('status')->nullable($value = true);
            $table->string('username')->nullable($value = true);
            $table->string('email')->nullable($value = true);
            $table->string('kontak')->nullable($value = true);
            $table->string('ktp')->nullable($value = true);
            $table->string('perusahaan')->nullable($value = true);
            $table->string('norek')->nullable($value = true);
            $table->string('bank')->nullable($value = true);
            $table->timestamp('email_verified_at');
            $table->string('password')->nullable($value = true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
