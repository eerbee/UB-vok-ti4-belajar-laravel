@extends('layouts.public.hal_koleksi_buku')

@section('content')
<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area" style="background-image: url({{asset('assets_public/images/koleksi_buku3.jpg')}});">
						<h1 class="mu-page-header-title">Koleksi Buku</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Koleksi Buku</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	<!-- Start main content -->
	<main>
		<!-- Start Team -->
		<section id="mu-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-team-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h3>Temukan Buku Yang Ingin Anda Cari</h3>
										<!-- Another variation with a button -->
										 <div class="input-group" style="margin-top: 25px;">
										 	<form class="form-control" action="{{ route('koleksi_buku.index')}}" method="get">
											    <input type="text" class="form-control" placeholder="Pencarian Buku" name="q">
											    <div class="input-group-append">
												     <button class="btn btn-secondary" type="submit">
												        <i class="fa fa-search"></i>
												     </button>
											    </div>
										    </form>
										 </div>
									</div>
								</div>
							</div>				
							<!-- Start Team Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-team-content">
										<div class="row">
											@foreach($bukus as $buku)
											<!-- start single item -->
											<div class="col-md-6">
												<div class="mu-single-team">
													<div class="mu-single-team-img">
														<img src="{{ URL::to('/') }}/images/{{ $buku->tbuku_cover_buku }}" >
													</div>
													<div class="mu-single-team-content">
														<h3>{{$buku->tbuku_judul}}</h3>
														<span>{{ $buku->table_kategori->tkategori_nama_kategori }} - {{$buku->tbuku_tahun_terbit}}</span>
														<br><br>
														<ul style="margin-left: 20px; margin-bottom: 10px;">
															<li>Penulis : {{$buku->tbuku_penulis}}</li>
															<li> Penerbit : {{$buku->tbuku_penerbit}} </li>
														</ul>
															<button type="button" class="btn btn-primary btn-s" data-toggle="modal" data-target="#detailModal{{$buku->tbuku_id}}">
															<i class="fa fa-caret-down"></i> &nbsp; Selengkapnya 
															</button>
													</div>
												</div>
											</div>
											<!-- End single item -->
											@endforeach
										</div>
										{!! $bukus->links() !!} 
									</div>
								</div>
							</div>
							<!-- End Team Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team -->
		@foreach($bukus as $buku)
		<div class="modal fade" id="detailModal{{$buku->tbuku_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		    <div class="modal-dialog" role="document">
		        <div class="modal-content">
		          	<div class="modal-header">

		            	<h4 class="modal-title" id="myModaldLabel">
		            		ID Buku : {{$buku->tbuku_id}}
		            	</h4>
		            	<button type="button" data-dismiss="modal">
							<i class="fa fa-times"></i>
						</button>
		          	</div>
		          	<div class="modal-body">
		          		<center>
		          			<img src="{{ URL::to('/') }}/images/{{ $buku->tbuku_cover_buku }}" width="150px" height="220px" style="margin-bottom: 8px;" /> <br>
		          			<h5>{{$buku->tbuku_judul}}</h5>
		          		</center>
		          		<ul style="margin-left: 20px;">
  							<li style="list-style: none;"> 
  								<i class="fa fa-angle-right"></i> &nbsp; Penulis : {{$buku->tbuku_penulis}}
  							</li>
  							<li style="list-style: none;"> 
  								<i class="fa fa-angle-right"></i> &nbsp; Penerbit : {{$buku->tbuku_penerbit}}
  							</li>
  							<li style="list-style: none;"> 
  								<i class="fa fa-angle-right"></i> &nbsp; Kategori  : {{ $buku->table_kategori->tkategori_nama_kategori }}
  							</li>
  							<li style="list-style: none;"> 
  								<i class="fa fa-angle-right"></i> &nbsp; Tahun Terbit : {{$buku->tbuku_tahun_terbit}}
  							</li>
  							<li style="list-style: none;"> 
  								<i class="fa fa-angle-right"></i> &nbsp; Sinopsis Buku : 
  								<p class="card-text" style="font-size: 11pt; margin-left: 20px;">
  									"{{$buku->tbuku_sinopsis}}"
  								</p> 
  							</li>
  						</ul>
		          	</div>
		          	<div class="modal-footer">
		            	<button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
		          	</div>
		        </div>
		    </div>
		</div>
		@endforeach
	</main>
	<!-- End main content -->	
@stop