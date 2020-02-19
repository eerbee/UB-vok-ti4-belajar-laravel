@extends('layouts.backend.hal_edit_buku')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="overview-wrap">
                <h2 class="title-1">EDIT BUKU</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger m-t-25">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="m-t-25" action="{{ route('buku.update', $buku->tbuku_id) }}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PATCH')
                <div class="form-group">
                    <label for="inputIdBuku">ID Buku</label>
                    <input type="text" class="form-control" name="tbuku_id" maxlength="12" value="{{ $buku->tbuku_id }}">
                </div>
                <div class="form-group">
                    <label for="inputJudulBuku">Judul Buku</label>
                    <input type="text" class="form-control" name="tbuku_judul" value="{{ $buku->tbuku_judul }}">
                </div>
                <div class="form-group">
                    <label for="inputPenulisBuku">Penulis Buku</label>
                    <input type="text" class="form-control" name="tbuku_penulis" value="{{ $buku->tbuku_penulis }}">
                </div>
                <div class="form-group">
                    <label for="inputPenerbitBuku">Penerbit Buku</label>
                    <input type="text" class="form-control" name="tbuku_penerbit" value="{{ $buku->tbuku_penerbit }}">
                </div>
                <div class="form-group">
                    <label for="inputTahunTerbit">Tahun Terbit Buku</label>
                    <input type="text" maxlength="4" class="form-control" name="tbuku_tahun_terbit" value="{{ $buku->tbuku_tahun_terbit }}">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Kategori Buku</label>
                    <select class="form-control" name="tbuku_kategori">
                        @foreach( $kategoris as $kategori)
                            <option value="{{ $kategori->tkategori_id }}" {{ $kategori->tkategori_id == $buku->tbuku_kategori ? 'selected="selected"' : '' }}> {{ $kategori->tkategori_nama_kategori }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputSinopsis">Sinopsis Buku</label>
                    <textarea name="tbuku_sinopsis" type="text" class="form-control" cols="60" rows="10" maxlength="10050">{{ $buku->tbuku_sinopsis }}</textarea>
                    </div>
                <div class="form-group">
                    <label for="inputCoverBuku">Pilih Cover Buku</label>
                    <input type="file" class="form-control" name="tbuku_cover_buku">
                    <img src="{{ URL::to('/')}}/images/{{ $buku->tbuku_cover_buku }}" class="img-thumbnail" width="250"/>
                    <input type="hidden" name="hidden_image" value="{{ $buku->tbuku_cover_buku }}">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary m-t-25">UPDATE</button>
                </center>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop