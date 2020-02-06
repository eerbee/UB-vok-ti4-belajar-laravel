@extends('layouts.backend.hal_tambah_buku')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="overview-wrap">
                <h2 class="title-1">TAMBAH BUKU</h2>
            </div>
        	<form class="m-t-25" action="{{ url('buku') }}" method="post">
        		@csrf
			    <div class="form-group">
			        <label for="inputIdBuku">ID Buku</label>
			        <input type="text" class="form-control" name="id_buku" placeholder="Masukkan ID Buku" required="">
			    </div>
			    <div class="form-group">
			        <label for="inputJudulBuku">Judul Buku</label>
			        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku" required="">
			    </div>
			    <div class="form-group">
			        <label for="inputPenulisBuku">Penulis Buku</label>
			        <input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis Buku" required="">
			    </div>
			    <div class="form-group">
			        <label for="inputPenerbitBuku">Penerbit Buku</label>
			        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit Buku" required="">
			    </div>
			    <div class="form-group">
			        <label for="inputTahunTerbit">Tahun Terbit Buku</label>
			        <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit Buku" required="">
			    </div>
			    <center>
					<button type="submit" class="btn btn-primary m-t-25">SUBMIT</button>
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