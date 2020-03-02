@extends('layouts.admin.kategori_buku.hal_edit_kategoribuku')

@section('content')
	<div class="main-content">
	    <div class="section__content section__content--p30">
	        <div class="container-fluid">
	        	<div class="overview-wrap">
	                <h2 class="title-1">EDIT BUKU</h2>
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
	        	<form class="m-t-25" action="{{ route('kategori.update', $kategoris->tkategori_id) }}" method="post">
	        		@csrf 
                	@method('PATCH')
				    <div class="form-group">
				        <label for="inputIdKategoriBuku">ID Kategori Buku</label>
				        <input type="text" class="form-control" name="tkategori_id" 
				        value="{{ $kategoris->tkategori_id}}" maxlength="12">
				    </div>
				    <div class="form-group">
				        <label for="inputNamaKategoriBuku">Nama Kategori Buku</label>
				        <input type="text" class="form-control" name="tkategori_nama_kategori"
				        value="{{ $kategoris->tkategori_nama_kategori}}">
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