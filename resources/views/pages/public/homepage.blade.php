@extends('layouts.public.hal_homepage')

@section('content')
	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{asset('assets_public/images/caraousel/slide-one.jpg')}}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>AKSESBILITAS</h1>
									<p>Free akses E-book dan E-journal</p>
									<a class="mu-primary-btn" href="{{ url('koleksi_buku') }}">Cari Buku <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">				
				<img src="{{asset('assets_public/images/caraousel/slide-two.png')}}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>KOLEKSI</h1>
									<p>Referensi Pendidikan dan Kebudayaan</p>
									<a class="mu-primary-btn" href="{{ url('koleksi_buku') }}">Cari Buku<span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{asset('assets_public/images/caraousel/slide-three.jpg')}}" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>KOMUNITAS</h1>
									<p>Jaringan & Relasi Perpustakaan Berbasis Komunitas</p>
									<a class="mu-primary-btn" href="{{ url('koleksi_buku') }}">Cari Buku <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->

	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Selamat Datang</h2>
										<p>Perpustakaan Ini Dikelola Secara Profesional Dengan Memanfaatkan Teknologi Informasi dan Komunikasi Dalam Menunjang Pelayanan Kepada Pemustaka.</p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="{{asset('assets_public/images/wellcome.png')}}" alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Koleksi Perpustakaan</h3>
												<p>Perpustakaan ini memiliki lebih dari dari 50.000 koleksi dalam berbagai bentuk (buku, buku digital, audiovisual, majalah, koran, jurnal, jurnal elektronik).</p>
											</li>
											<li>
												<h3>Pelayanan Perpustakaan</h3>
												<p>Pengelolaan pelayanan Perpustakaan yang profesional dan sesuai dengan Standar Nasional Perpustakaan (Terakreditasi "A" oleh Perpustakaan Nasional RI).</p>
											</li>
											<li>
												<h3>Acara Komunitas</h3>
												<p>Terdapat berbagai program & acara terkait berbagai koleksi, pelayanan, kegiatan, dan komunitas di Perpustakaan publik</p>
											</li>
											<li>
												<h3>Slims</h3>
												<p>SLims adalah sistem automasi perpustakaan sumber terbuka (open source) yang pertama kali dikembangkan dan digunakan oleh Perpustakan ini serta dapat digunakan selama jadi anggota perpustakaan.</p>
											</li>
											<li>
												<h3>Fasilitas</h3>
												<p>Kami berharap Anda betah berlama-lama di dalam gedung Perpustakaan treboo dan menjadikan perpustakaan ini sebagai salah satu tempat favorit anda. dan kami berupaya untuk menciptakan dan meningkatkan kenyamanan Anda dalam memanfaatkan kegiatan berpustaka.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>Jam Layanan Perpustakaan treebo</h2>
								<p>Senin - Jumat pukul 08.00 sampai pukul 22.00</p>
							</div>
							<a href="{{ url('koleksi_buku') }}" class="mu-primary-btn mu-quote-btn">Cek Koleksi Buku Kami<i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>FASILITAS EKSKLUSIF KAMI</h2>
										<p>Sebagai upaya untuk menciptakan kenyamanan Anda dalam memanfaatkan perpustakaan, beberapa fasilitas dapat Anda manfaatkan</p>
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Kantin & Cafe</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-star" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Musholla</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>

												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Co-working Space</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Ruang Serbaguna</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-wifi" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Wifi </h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Fasilitas Lainnya</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->
	</main>
	<!-- End main content -->
@stop