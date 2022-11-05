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
            // $table->id();
            // $table->string('name');
            // $table->string('last_name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
            $table->id();
            $table->string('name');
            $table->string('nip')->nullable();
            $table->string('nim')->nullable();
            $table->enum('jurusan', ['D-IV Komputasi Statistik', 'D-IV Statistika', 'D-III Statistika'])->nullable();
            $table->string('tahunLulus')->nullable();
            $table->string('tempatLahir')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('nomorPonsel')->nullable();
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('github_id')->nullable();
            $table->string('email')->unique();
            // $table->string('skpenempatan1bps');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->string('social_id');
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