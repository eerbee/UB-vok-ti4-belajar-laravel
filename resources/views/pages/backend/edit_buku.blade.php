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
            <form class="m-t-25" action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PATCH')
                <div class="form-group">
                    <label for="inputIdBuku">ID Buku</label>
                    <input type="text" class="form-control" name="id" maxlength="12" value="{{ $buku->id }}">
                </div>
                <div class="form-group">
                    <label for="inputJudulBuku">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="form-group">
                    <label for="inputPenulisBuku">Penulis Buku</label>
                    <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}">
                </div>
                <div class="form-group">
                    <label for="inputPenerbitBuku">Penerbit Buku</label>
                    <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="inputTahunTerbit">Tahun Terbit Buku</label>
                    <input type="text" maxlength="4" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
                </div>
                <div class="form-group">
                    <label for="inputKategori">Kategori Buku</label>
                    <input type="text" class="form-control" name="kategori" value="{{ $buku->kategori }}">
                </div>
                <div class="form-group">
                    <label for="inputSinopsis">Sinopsis Buku</label>
                    <textarea name="sinopsis" type="text" class="form-control" cols="60" rows="10" maxlength="10050">{{ $buku->sinopsis }}</textarea>
                    </div>
                <div class="form-group">
                    <label for="inputCoverBuku">Pilih Cover Buku</label>
                    <input type="file" class="form-control" name="cover_buku">
                    <img src="{{ URL::to('/')}}/images/{{ $buku->cover_buku }}" class="img-thumbnail" width="250"/>
                    <input type="hidden" name="hidden_image" value="{{ $buku->cover_buku }}">
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