@extends('layouts.backend.hal_detail_buku')

@section('content')
	<div class="main-content">
	    <div class="section__content section__content--p30">
	        <div class="container-fluid">
	        	<div class="overview-wrap">
	                <h2 class="title-1">DETAIL BUKU</h2>
	            </div>
	            <div class="row">
	            	<div class="col-8 m-t-35">
	            		<div class="card mb-3" style="max-width: 540px;">
	            			<div class="row no-gutters">
    							<div class="col-md-4">
      								<img src="{{ URL::to('/') }}/images/{{ $data->tbuku_cover_buku }}" class="card-img"/><br>
      								<center>
      									<h5 style="margin-top: 10px;">{{$data->tbuku_id}}</h5>
      								</center>
    							</div>
							    <div class="col-md-8">
							      	<div class="card-body">
							        	<h4 class="card-title">{{$data->tbuku_judul}}</h5>
							        	<p class="card-text" style="margin-top: -10px; margin-bottom:10px;">
							        		<small class="text-muted">{{$data->tbuku_kategori}} - {{$data->tbuku_tahun_terbit}}</small>
							        	</p>
							        	<p class="card-text" style="font-size: 11pt;">{{$data->tbuku_sinopsis}}</p>
							      	</div>
							    </div>
  							</div>
						</div>
	            	</div>
  					<div class="col-4 m-t-55" style="margin-left: -1cm;">
  						<ul>
  							<li>ID Buku : {{$data->tbuku_id}}</li>
  							<li>Penulis : {{$data->tbuku_penulis}}</li>
  							<li>Penerbit : {{$data->tbuku_penerbit}}</li>
  							<li>Tahun Terbit : {{$data->tbuku_tahun_terbit}}</li>
  							<li>Kategori : {{$data->tbuku_kategori}}</li>
  						</ul>
  					</div>
	            </div>
	            <div class="row">
	                <div class="col-md-12 m-t-25">
	                    <div class="copyright">
	                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="jumbotron text-center">
	 	
	</div>
@stop