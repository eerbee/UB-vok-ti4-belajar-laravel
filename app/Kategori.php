<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table ='table_kategori';

    public $timestamps = false;

    protected $fillable = ['id', 'nama_kategori'];

 //    public function table_buku()
 //    { 
 //      return $this->hasMany('App\Buku'); 
	// }
}
