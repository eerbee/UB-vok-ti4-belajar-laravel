<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) 
        {
            $table->string('id', 12);
            $table->string('judul', 500);
            $table->string('penulis', 200);
            $table->string('penerbit', 200);
            $table->integer('tahun_terbit', 4);
            // $table->integer('kategori_id', 10);
            $table->string('kategori', 200);
            $table->string('sinopsis', 10000);
            $table->string('cover_buku', 200);
            $table->timestamps();

            // $table->foreign('kategori_id')->references('id')->on('table_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
