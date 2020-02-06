@extends('layouts.backend.hal_edit_buku')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="overview-wrap">
                <h2 class="title-1">EDIT BUKU</h2>
            </div>
            <form class="m-t-25" action="{{ url('buku/' . $buku->id . '/update') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputIdBuku">ID Buku</label>
                    <input type="text" class="form-control" name="id_buku" value="{{ $buku->id_buku }}">
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
                    <input type="text" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
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