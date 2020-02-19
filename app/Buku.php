<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = "table_buku";

    protected $primaryKey = 'tbuku_id';

    public $incrementing = false;

    protected $fillable = ['tbuku_id','tbuku_judul','tbuku_penulis','tbuku_penerbit',
    'tbuku_tahun_terbit','tbuku_kategori','tbuku_sinopsis','tbuku_cover_buku'];

    public function table_kategori()
    {
    	return $this->belongsTo('App\Kategori','tbuku_kategori','tkategori_id');
    }
}
