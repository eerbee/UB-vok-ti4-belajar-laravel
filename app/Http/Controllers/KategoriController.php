<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategoris = Kategori::when($request->src, function ($query) use ($request) 
        {
              $query->where('tkategori_id', 'LIKE', "%{$request->src}%")
                    ->orWhere('tkategori_nama_kategori', 'LIKE', "%{$request->src}%");
        })->orderBy('tkategori_id', 'desc')->paginate(5);

        $kategoris->appends($request->only('src'));

        return view('pages.backend.kategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.backend.tambah_kategoribuku');
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
            'tkategori_nama_kategori' => 'required'                  
        ]);

        $form_data = array(
            'tkategori_nama_kategori' => $request->tkategori_nama_kategori
        );

        Kategori::create($form_data);
        return redirect('/kategori')->with('succes', 'Data is succesfully Added.');
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
        $kategoris = Kategori::findOrFail($id);
        return view('pages.backend.edit_kategoribuku', compact('kategoris'));
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
        $request->validate([
            'tkategori_id' => 'required',
            'tkategori_nama_kategori' => 'required'                  
        ]);

        $form_data = array(
            'tkategori_id' => $request->tkategori_id,
            'tkategori_nama_kategori' => $request->tkategori_nama_kategori
        );
  
        Kategori::where('tkategori_id',$id)->update($form_data);

        return redirect('/kategori')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoris = Kategori::findOrFail($id);
        $kategoris->delete();
        return redirect('/kategori')->with('succes', 'Data is succesfully deleted.');
    }
}
