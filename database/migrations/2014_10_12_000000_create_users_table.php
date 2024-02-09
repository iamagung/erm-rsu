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
            $table->id();
            $table->string('name',50);
            $table->string('username',100)->unique();
            $table->string('level_user',100)->comment('admisi, bidan, dokter, farmasi, gizi, perawat, ruang, superadmin, terapis');
            $table->string('jenis_nakes',100)->nullable()->comment('bidan, dokter, farmasi apoteker, fisioterapis, ahli gizi, perawat');
            $table->integer('dokter_id')->nullable()->comment('hanya diisi ketika jenis_nakes==dokter, value dbsimars table dokter_bridg kolom id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->string('show')->comment('encrypt password');
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
