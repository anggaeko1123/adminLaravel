<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('cover');
            $table->string('terbit');
            $table->enum('kategori_1',['rekomendasi','terbaru','populer','terlaris','gratis']);
            $table->enum('kategori_2',['beauty','healt','social science','religion & spirituality','education & teaching','entertainment','parenting & family']);
            $table->double('rating');
            $table->text('jenis', ['biasa','premium']);
            $table->text('penulis');
            $table->text('deskripsi');
            $table->string('isi');
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
        Schema::dropIfExists('posts');
    }
}
