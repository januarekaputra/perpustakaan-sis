<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku', 50)->unique();
            $table->string('isbn', 15)->nullable();
            $table->string('judul', 100);
            $table->string('slug', 100);
            $table->string('penerbit', 50);
            $table->string('pengarang', 50);
            $table->foreignId('category_id');
            $table->integer('jumlah');
            $table->string('rak', 20);
            $table->text('image');
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
        Schema::dropIfExists('books');
        Schema::dropIfExists('categories');
    }
}
