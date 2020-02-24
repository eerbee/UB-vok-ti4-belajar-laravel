<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $bukus = Buku::all();

        $bukus = Buku::when($request->q, function ($query) use ($request) 
        {
          $query->where('tbuku_id', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_judul', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_penulis', 'LIKE', "%{$request->q}%")
                ->orWhere('tkategori_nama_kategori', 'LIKE', "%{$request->q}%")
                ->orWhere('tbuku_tahun_terbit', 'LIKE', "%{$request->q}%");
        })  
        ->join('table_kategori', 'table_kategori.tkategori_id', '=', 'table_buku.tbuku_kategori')
        ->orderBy('tbuku_id', 'desc')->paginate(5);

        $bukus->appends($request->only('q'));

        return view('pages.backend.buku', compact('bukus'));

        // if(!$bukus->isEmpty()) 
        // {
        //     return view('pages.backend.buku', compact('bukus'));
        // }  
        // else 
        // {

        //     // abort(404);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        // return view('pages.backend.tambah_buku', compact('kategoris'));
        return view('pages.backend.tambah_buku')->with('kategoris', $kategoris);
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
            'tbuku_id' => 'required',
            'tbuku_judul' => 'required',
            'tbuku_penulis' => 'required' ,
            'tbuku_penerbit' => 'required' ,
            'tbuku_tahun_terbit' => 'required',
            'tbuku_kategori' => 'required',
            'tbuku_cover_buku' => 'required|image|max:2048'                  
        ]);

        $image = $request->file('tbuku_cover_buku');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'tbuku_id' => $request->tbuku_id,
            'tbuku_judul' => $request->tbuku_judul, 
            'tbuku_penulis' => $request->tbuku_penulis,
            'tbuku_penerbit' => $request->tbuku_penerbit, 
            'tbuku_tahun_terbit' => $request->tbuku_tahun_terbit,
            'tbuku_kategori' => $request->tbuku_kategori,
            'tbuku_sinopsis' => $request->tbuku_sinopsis,
            'tbuku_cover_buku' => $new_name
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
        $buku = Buku::findOrFail($id);

        return view('pages.backend.buku_detail',compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $buku = Buku::findOrFail($id);
        return view('pages.backend.edit_buku', compact('buku'))->with('kategoris', $kategori);
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
        $cover = $request->file('tbuku_cover_buku');
        if($cover != '')
        {
            $request->validate([
                'tbuku_id' => 'required',
                'tbuku_judul' => 'required',
                'tbuku_penulis' => 'required' ,
                'tbuku_penerbit' => 'required' ,
                'tbuku_tahun_terbit' => 'required',
                'tbuku_cover_buku' => 'required|image|max:2048' 
            ]);

            $cover_name = rand() . '.' . $cover->getClientOriginalExtension();
            $cover->move(public_path('images'), $cover_name);
        }
        else
        {
            $request->validate([
                'tbuku_id' => 'required',
                'tbuku_judul' => 'required',
                'tbuku_penulis' => 'required' ,
                'tbuku_penerbit' => 'required' ,
                'tbuku_tahun_terbit' => 'required',
                'tbuku_kategori' => 'requir ed'
            ]);
        }

        $form_data = array(
            'tbuku_id' => $request->tbuku_id,
            'tbuku_judul' => $request->tbuku_judul, 
            'tbuku_penulis' => $request->tbuku_penulis,
            'tbuku_penerbit' => $request->tbuku_penerbit, 
            'tbuku_tahun_terbit' => $request->tbuku_tahun_terbit,
            'tbuku_kategori' => $request->tbuku_kategori,
            'tbuku_sinopsis' => $request->tbuku_sinopsis,
            'tbuku_cover_buku' => $cover_name
        );
  
        Buku::where('tbuku_id',$id)->update($form_data);

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
