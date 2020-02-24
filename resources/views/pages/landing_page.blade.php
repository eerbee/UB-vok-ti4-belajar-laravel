@extends('layouts.hal_homepage')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <img src="assets/img/logo.png" width="75" height="75" style="margin-left: 20px;">
        <a class="navbar-brand" href="/" style="margin-left: 25px; margin-top: 5px; font-size: 24pt;">
          Orchan Library <br>
          <h6 style="margin-top: -10px; margin-left: 3px; color: blue;">
            insightful with books
          </h6>
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03" class="navbar">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
          <form class="form-inline my-2 my-lg-0">
            <label>
              <a class="menu" href="/" style="text-decoration: none;"><b>HOME</b></a>
            </label>
            <label>
              <a class="menu" href="/koleksi" style="text-decoration: none;"><b>KOLEKSI</b></a>
            </label>
            <label>
              <a class="menu" href="/profil" style="text-decoration: none;"><b>PROFIL</b></a>
            </label>
            <label>
                <a class="menu" href="/login" style="text-decoration: none;"><b>ADMIN</b></a>
            </label>
          </form>
        </div>
  </nav>

  <!-- CARAOUSEL SECTION -->
  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/carousel/slide-one.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="caption_caraousel">
              <h5>
                <b>AKSESBILITAS</b>
                <br>
                <p>Free akses E-book dan E-journal</p>
                <form action="/koleksi" method="GET">
                  <button>Cari Buku</button>
                </form>
              </h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carousel/slide-four.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="caption_caraousel">
              <h5>
                <b>KOMUNITAS</b>
                <br>
                <p>Jaringan & Relasi Perpustakaan Berbasis Komunitas</p>
                <form>
                  <button>Cari Buku</button>
                </form>
              </h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/carousel/slide-two.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class="caption_caraousel">
              <h5>
                <b>KOLEKSI</b>
                <br>
                <p>Referensi Pendidikan dan Kebudayaan</p>
                <form>
                  <button>Cari Buku</button>
                </form>
              </h5>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- JAM LAYANAN SECTION -->
  <div class="single-about-detail clearfix">
    <center>
      <div class="about-details">
        <div class="pentagon-text">
          <p style="font-size: 30pt; font-family: Lato; padding-top: 25px;">
            <b>JAM LAYANAN</b>
          </p>
        </div>
        <br>
        <div class="row" style="margin-right: 0px; margin-left: 0px;">
          <div class="col-md-6" style="padding-left: 0px; padding-right: 0px;">
            <img src="assets/img/icons/jadwal1.png">
            <br><br>
            <h3>Senin - Jumat</h3>
            <p style="margin-bottom: 2px;">
              <font face="Century Gothic" size="4">
                Pukul 08.00 - 22.00 
              </font>
            </p>
          </div>
          <div class="col-md-6">
            <img src="assets/img/icons/jadwal2.png">
            <br><br>
            <h3>Sabtu - Minggu</h3>
            <p style="margin-bottom: 2px;">
              <font face="Century Gothic" size="4">
                Pukul 09.00 - 17.00
              </font>
              </p>
          </div>
        </div>  
      </div>
    </center>
  </div>

  <!-- ABOUT LIBRARY SECTION -->
  <div class="about_container">
    <center>
      <h2>ABOUT US</h2>
      <h4>
        Perpustakaan Ini Dikelola Secara Profesional Dengan Memanfaatkan Teknologi Informasi dan Komunikasi Dalam Menunjang Pelayanan Kepada Pemustaka. 
      </h4>
    </center>
    <hr style="margin-left: 100px; margin-right: 100px;">
    <div class="row" style="margin-right: 0px; margin-left: 0px;">
      <div class="col-md-6" style="padding-left: 0px;">
        <img src="assets/img/thumbnails/IA.jpg" width="674">
      </div>
      <div class="col-md-6" style="padding-left: 0px;">
        <div class="caption">
          <p>
            <b style="font-family: Segoe UI -700; font-size: 35px; color: #027cc9;">Koleksi Perpustakaan</b>
            <br>
            <p style="font-family: Segoe UI -400; font-size: 20px; color: ##212529;"> 
              Perpustakaan ini memiliki lebih dari dari 50.000 koleksi dalam berbagai bentuk (buku, buku digital, audiovisual, majalah, koran, jurnal, jurnal elektronik). 
            </p>
          </p>
        </div>
      </div>
    </div>   
    <div class="row" style="margin-right: 0px; margin-left: 0px;">
      <div class="col-md-6" style="padding-left: 0px;">
        <div class="caption">
          <p>
            <b style="font-family: Segoe UI -700; font-size: 35px; color: #027cc9;">Pelayanan Perpustakaan</b>
            <br>
            <p style="font-family: Segoe UI -400; font-size: 20px; color: ##212529;"> 
              Pengelolaan pelayanan Perpustakaan yang profesional dan sesuai dengan Standar Nasional Perpustakaan (Terakreditasi "A" oleh Perpustakaan Nasional RI).
            </p>
          </p>
        </div>
      </div>
      <div class="col-md-6" style="padding-left: 0px;">
        <img src="assets/img/thumbnails/IB.jpg" width="674">
      </div>
    </div>
    <div class="row" style="margin-right: 0px; margin-left: 0px;">
      <div class="col-md-6" style="padding-left: 0px;">
        <img src="assets/img/thumbnails/IC.jpg" width="674">
      </div>
      <div class="col-md-6" style="padding-left: 0px;">
        <div class="caption">
          <p>
            <b style="font-family: Segoe UI -700; font-size: 35px; color: #027cc9;">Acara Komunitas</b>
            <br>
            <p style="font-family: Segoe UI -400; font-size: 20px; color: ##212529;"> 
              Informasi terbaru terkait berbagai koleksi, pelayanan, kegiatan, dan komunitas di Perpustakaan publik. 
            </p>
          </p>
        </div>
      </div>
    </div> 
    <div class="row" style="margin-right: 0px; margin-left: 0px;">
      <div class="col-md-6" style="padding-left: 0px;">
        <div class="caption">
          <p>
            <b style="font-family: Segoe UI -700; font-size: 35px; color: #027cc9;">Slims</b>
            <br>
            <p style="font-family: Segoe UI -400; font-size: 20px; color: ##212529;"> 
              SLims adalah sistem automasi perpustakaan sumber terbuka (open source) yang pertama kali dikembangkan dan digunakan oleh Perpustakan ini serta dapat digunakan selama jadi anggota perpustakaan.
            </p>
          </p>
        </div>
      </div>
      <div class="col-md-6" style="padding-left: 0px;">
        <img src="assets/img/thumbnails/ID.jpg" width="674">
      </div>
    </div>
  </div>
  

  <!-- FOOTER SECTION -->
  <div id="batas"></div>
  <div class="pt-5 pb-5 footer">
    <div class="container" style="margin-bottom: -40px;">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">

          <h2>
            <img src="assets/img/logo.png" width="75" height="75" style="margin-right: 8px;">
            Orchan Library
          </h2>
          <p class="pr-5 text-white-50" style="margin-left: 96px; margin-top: -30px;">
            Insightful with books 
          </p>
          <p>
            <a href="#">
              <i class="fa fa-facebook-square mr-1"></i>
            </a>
            <a href="#">
              <i class="fa fa-linkedin-square"></i>
            </a>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 links" style="margin-top: 20px;">
          <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li> 
              <a href="https://www.pnri.go.id/">Perpustakaan Nasional RI </a>
            </li>
            <li> 
              <a href="https://e-resources.perpusnas.go.id/menu">E-Resources Perpustakaan Nasional </a>
            </li>
            <li> <a href="https://npp.pnri.go.id/">Nomor Pokok Perpustakaan (NPP) </a></li>
            <li> <a href="https://www.kemdikbud.go.id/">Kemendikbud</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location" style="margin-top: 20px;">
          <h4 class="mt-lg-0 mt-sm-4">Location</h4>
            Universitas Brawijaya, <br> 
            Gedung Vokasi A lantai 2 <br>
            Jl. Veteran No.12-14, Ketawanggede, <br> 
            Kec. Lowokwaru, Kota Malang, 
            Jawa Timur 65145, <br>
            Indonesia<br>
            WA +622181286041100 <br>
            Tlp. +6221 5707870 Fax. +6221 5731228 <br>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class="">
            <small class="text-white-50">© 2018 Orchan Library. All Rights Reserved</small>
          </p>
        </div>
      </div>
    </div>
  </div>

@stop