@extends('layouts.backend.hal_tambah_buku')

@section('content')
	<div class="main-content">
	    <div class="section__content section__content--p30">
	        <div class="container-fluid">
	        	<div class="overview-wrap">
	                <h2 class="title-1">TAMBAH BUKU</h2>
	            </div>
	            @if($errors->any())
					<div class="alert alert-danger m-t-25">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
	        	<form class="m-t-25" action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
	        		@csrf
				    <div class="form-group">
				        <label for="inputIdBuku">ID Buku</label>
				        <input type="text" class="form-control" name="id" placeholder="Masukkan ID Buku" maxlength="12">
				    </div>
				    <div class="form-group">
				        <label for="inputJudulBuku">Judul Buku</label>
				        <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku">
				    </div>
				    <div class="form-group">
				        <label for="inputPenulisBuku">Penulis Buku</label>
				        <input type="text" class="form-control" name="penulis" placeholder="Masukkan Penulis Buku">
				    </div>
				    <div class="form-group">
				        <label for="inputPenerbitBuku">Penerbit Buku</label>
				        <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Penerbit Buku">
				    </div>
				    <div class="form-group">
				        <label for="inputTahunTerbit">Tahun Terbit Buku</label>
				        <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit Buku" maxlength="4">
				    </div>
				    <div class="form-group">
				        <label for="inputKategori">Kategori Buku</label>
				        <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori Buku">
				    </div>
				    <div class="form-group">
				        <label for="inputSinopsis">Sinopsis Buku</label>
				        <!-- <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori Buku"> -->
				        <!-- <textarea name="sinopsis"  placeholder="Masukkan Sinopsis Buku" maxlength="1050"></textarea> -->
				        <textarea name="sinopsis" type="text" class="form-control" cols="60" rows="10" maxlength="10050" placeholder="Masukkan Sinopsis Buku" ></textarea>
				    </div>
				    <div class="form-group">
				        <label for="inputCoverBuku">Cover Buku</label>
				        <input type="file" class="form-control" name="cover_buku" class="btn btn-primary" value="Add">
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