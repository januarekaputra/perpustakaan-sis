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
            $table->string('no_anggota')->unique();
            $table->string('nama_anggota', 50);
            $table->enum('jen_kel', ['Laki-Laki', 'Perempuan']);
            $table->enum('status', ['Guru', 'Siswa', 'Staff']);
            $table->string('alamat', 100);
            $table->string('email', 100)->nullable();
            $table->string('no_telp', 13)->nullable();
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
