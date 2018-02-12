<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IsiBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_berita', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_media');
            $table->integer('id_narasumber1');
            $table->integer('id_narasumber2')->nullable();
            $table->integer('id_narasumber3')->nullable();
            $table->integer('id_narasumber4')->nullable();
            $table->integer('id_sub_topik');
            $table->string('judul');
            $table->string('jenis_berita');
            $table->text('isi_berita');
            $table->string('wartawan');
            $table->string('link_berita')->nullable();
            $table->string('halaman')->nullable();
            $table->string('gambar');
            $table->text('kutipan');
            $table->integer('tone_berita');
            $table->integer('tone_judul');
            $table->integer('tone_kutipan');
            $table->integer('ad_value');
            $table->integer('news_value');
            $table->date('tgl_berita');
            $table->dateTime('tgl_post');
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
        Schema::drop('isi_berita');
    }
}
