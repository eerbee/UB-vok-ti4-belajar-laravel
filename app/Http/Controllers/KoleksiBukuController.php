<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class KoleksiBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bukus = Buku::all();
        // $bukus = Buku::when($request->q, function ($query) use ($request) 
        // {
        //   $query->where('tbuku_id', 'LIKE', "%{$request->q}%")
        //         ->orWhere('tbuku_judul', 'LIKE', "%{$request->q}%")
        //         ->orWhere('tbuku_penulis', 'LIKE', "%{$request->q}%")
        //         ->orWhere('tkategori_nama_kategori', 'LIKE', "%{$request->q}%")
        //         ->orWhere('tbuku_tahun_terbit', 'LIKE', "%{$request->q}%");
        // })  
        // ->join('table_kategori', 'table_kategori.tkategori_id', '=', 'table_buku.tbuku_kategori')
        // ->orderBy('tbuku_id', 'desc');

        // $bukus->appends($request->only('q'));

        return view('pages.public.koleksi_buku',compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
