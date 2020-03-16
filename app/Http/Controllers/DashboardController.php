<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
    	$bukus = Buku::when($request->q, function ($query) use ($request) 
        {
          $query->where('tbuku_id', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_judul', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_penulis', 'LIKE', "%{$request->q}%")
                ->orWhere('tkategori_nama_kategori', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_tahun_terbit', 'LIKE', "%{$request->q}%");
        })  
        ->join('table_kategori', 'table_kategori.tkategori_id', '=', 'table_buku.tbuku_kategori')
        ->orderBy('tbuku_id', 'desc')->paginate(10);

        $bukus->appends($request->only('q'));

        $kategoris = Kategori::all();

        $buku_ = Buku::all();

        return view('pages.admin.dashboard', compact('bukus','kategoris', 'buku_'));
    }
}
