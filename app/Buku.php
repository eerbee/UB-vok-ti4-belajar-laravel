<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "table_buku";

    public $timestamps = false;	

    protected $fillable = ['id_buku', 'judul', 'penulis', 'penerbit', 'tahun_terbit'];
}
