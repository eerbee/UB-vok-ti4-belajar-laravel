@extends('layouts.public.hal_about_us')

@section('content')
<style type="text/css">
	.map-responsive{
    overflow:hidden;
    padding-bottom:70.25%;
    position:relative;
    height:0;
    margin-top: 55px;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>
<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area" style="background-image: url({{asset('assets_public/images/about_us2.jpg')}}) ;">
						<h1 class="mu-page-header-title">About us</h1>
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
					    <li class="breadcrumb-item active" aria-current="page">About Us</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

	
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
										<h2>TENTANG TREEBO LIBRARY</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<ul>
											<li>
												<h3>Kunjungi Kami</h3>
											</li>
										</ul>
										<div class="map-responsive">
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15806.026344871498!2d112.6168236434082!3d-7.94648577313064!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas+Brawijaya!5e0!3m2!1sid!2sid!4v1556694723339!5m2!1sid!2sid" width="540" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Halo Pemustaka</h3>
												<p>treebo Library merupakan perpustakaan utama di Malang yang dibuka secara resmi oleh Menteri Pendidikan Nasional pada 29 November 20016. Perpustakaan ini diharapkan menjadi referensi dalam bidang pendidikan dan kebudayaan dengan menyediakan akses informasi dan pengetahuan yang lengkap, baik dalam bentuk koleksi tercetak maupun digital, juga membina 10 perpustakan di lingkungan Malang baik di unit pusat malanh maupun Unit Pelaksana Teknis (UPT) di daerah malang. Pengelolaan Orchan Library dilaksanakan sesuai dengan Standar Nasional Perpustakaan (SNP) Khusus, dimana pada tahun 2017 Perpustakaan ini telah mendapatkan Akreditasi A oleh Perpustakaan Nasional RI. Perpustakaan ini dikelola secara profesional dengan memanfaatkan teknologi informasi dan komunikasi dalam menunjang pelayanan kepada pemustaka. Perpustakaan berupaya meningkatkan kualitas pelayanan dengan selalu memperbaharui koleksi dan layanan sesuai dengan kebutuhan pemustaka dan arah kebijakan Kemendikbud. Dengan keunggulan lokasi yang strategis dan nyaman, Perpustakaan treebo juga merupakan tempat aktifitas komunitas pendidikan dan kebudayaan dalam menyelenggarakan berbagai acara dan kegiatan secara rutin.</p>
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
	</main>
	<!-- End main content -->
@stop