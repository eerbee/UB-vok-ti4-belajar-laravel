<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "table_buku";

    public $timestamps = false;	

    protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'tahun_terbit', 
    'kategori', 'sinopsis', 'cover_buku'];

    // public function table_kategori()
    // {
    // 	return $this->belongsTo('App\Kategori');
    // }
}
