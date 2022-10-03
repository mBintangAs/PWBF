<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('No_Telepon');
            $table->boolean('JK');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('nik')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('no_str')->nullable();
            $table->string('profesi')->nullable();
            $table->integer('level')->default('0');
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
};
