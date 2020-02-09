<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buku::all();
        return view('pages.backend.buku', ['bukus' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required' ,
            'penerbit' => 'required' ,
            'tahun_terbit' => 'required',
            'kategori' => 'required',
            'cover_buku' => 'required|image|max:2048'                  
        ]);

        $image = $request->file('cover_buku');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'id' => $request->id,
            'judul' => $request->judul, 
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit, 
            'tahun_terbit' => $request->tahun_terbit,
            'kategori' => $request->kategori,
            'sinopsis' => $request->sinopsis,
            'cover_buku' => $new_name
        );

        Buku::create($form_data);
        return redirect('/buku')->with('succes', 'Data is succesfully Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::findOrFail($id);
        return view('pages.backend.buku_detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('pages.backend.edit_buku', compact('buku'));
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
        $cover_name = $request->hidden_image;
        $cover = $request->file('cover_buku');
        if($cover != '')
        {
            $request->validate([
                'id' => 'required',
                'judul' => 'required',
                'penulis' => 'required' ,
                'penerbit' => 'required' ,
                'tahun_terbit' => 'required',
                'cover_buku' => 'required|image|max:2048' 
            ]);

            $cover_name = rand() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('images'), $cover_name);
        }
        else
        {
            $request->validate([
                'id' => 'required',
                'judul' => 'required',
                'penulis' => 'required' ,
                'penerbit' => 'required' ,
                'tahun_terbit' => 'required',
                'kategori' => 'required'
            ]);
        }

        $form_data = array(
            'id' => $request->id,
            'judul' => $request->judul, 
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit, 
            'tahun_terbit' => $request->tahun_terbit,
            'kategori' => $request->kategori,
            'sinopsis' => $request->sinopsis,
            'cover_buku' => $cover_name
        );
  
        Buku::whereId($id)->update($form_data);

        return redirect('/buku')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect('/buku')->with('succes', 'Data is succesfully deleted.');
    }
}
