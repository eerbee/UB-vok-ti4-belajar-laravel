@extends('layouts.public.hal_koleksi_buku')

@section('content')
<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Portfolio</h1>
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
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
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
										<h2>Creative team</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
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
														<span>Founder</span>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
														<li><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#detailModal{{$buku->tbuku_id}}"></li>
													</div>
												</div>
											</div>
											<!-- End single item -->
											@endforeach
										</div>
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
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title" id="myModaldLabel">{{$buku->tbuku_judul}}</h4>
		          </div>
		          <div class="modal-body">
		            {{$buku->tbuku_judul}}
		          </div>
		          <div class="modal-footer">
		            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		            <button type="button" class="btn btn-primary">Save changes</button>
		          </div>
		        </div>
		      </div>
		    </div>
		@endforeach
	</main>
	<!-- End main content -->	
@stop