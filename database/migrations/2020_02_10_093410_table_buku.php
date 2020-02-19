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
            $table->string('tbuku_id', 12)->primary();
            $table->string('tbuku_judul');
            $table->string('tbuku_penulis');
            $table->string('tbuku_penerbit');
            $table->year('tbuku_tahun_terbit');
            $table->bigInteger('tbuku_kategori')->unsigned()->nullable();
            $table->string('tbuku_sinopsis', 10000);
            $table->string('tbuku_cover_buku');
            $table->timestamps();
        });   

        Schema::table('table_buku', function($table) {
            $table->foreign('tbuku_kategori')->references('tkategori_id')->on('table_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
    }
}
