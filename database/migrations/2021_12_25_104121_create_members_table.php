<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('no_anggota')->unique();
            $table->string('nama_anggota');
            $table->enum('jen_kel', ['Laki-Laki', 'Perempuan']);
            $table->enum('status', ['Guru', 'Siswa']);
            $table->string('alamat');
            $table->string('email')->unique()->nullable();
            $table->string('no_telp')->unique()->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('members');
    }
}
