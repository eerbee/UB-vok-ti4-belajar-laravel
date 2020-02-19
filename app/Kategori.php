<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table ='table_kategori';

    protected $primaryKey = 'tkategori_id';

    protected $fillable = ['tkategori_id', 'tkategori_nama_kategori'];

    public function table_buku()
    { 
      return $this->hasMany('App\Buku','tbuku_kategori','tkategori_id'); 
	}
}
