@extends('layouts.admin.hal_dashboard')

@section('content')
<script>
    var codeBlock = '<h2 class="title-1">DASHBOARD</h2>';
    document.getElementById("title_page").innerHTML = codeBlock
</script>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row m-t-25">
                    <div class="col-lg-6">
                        <div class="au-card recent-report">
                            <div class="au-card-inner">
                                <h3 class="title-2 tm-b-5">
                                    <span class="dot dot--blue" style="margin-bottom: 3.5px; margin-right: 10px;"></span>Koleksi Buku : {{ $buku_->count() }} 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="au-card recent-report">
                            <div class="au-card-inner">
                                <h3 class="title-2 tm-b-5">
                                    <span class="dot dot--red" style="margin-bottom: 3.5px; margin-right: 10px;"></span>Kategori Buku : {{ $kategoris->count() }} 
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <form style="margin-bottom: 25px;" class="form-header" action="{{ route('dashboard.index')}}" method="get">
                                <input class="au-input au-input--xl" type="text" name="q" placeholder="Pencarian Data Buku"/>
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>ID Buku</th>
                                        <th>Judul Buku</th>
                                        <th class="text-right">Penulis</th>
                                        <th class="text-right">Kategori Buku</th>
                                        <th class="text-right">Tahun Terbit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bukus as $buku => $b)
                                    <tr>
                                        <td>
                                            {{ $bukus->firstItem() + $buku }}
                                        </td>
                                        <td>{{ $b->tbuku_id }}</td>
                                        <td>{{ $b->tbuku_judul }}</td>
                                        <td class="text-right">{{ $b->tbuku_penulis }}</td>
                                        <td class="text-right">{{ $b->tkategori_nama_kategori }}</td>
                                        <td class="text-right">{{ $b->tbuku_tahun_terbit }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $bukus->links() !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="m-b-10 m-t-30" align="center">KATEGORI BUKU</h3>
                        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                            <div class="au-card-inner">
                                <div class="table-responsive">
                                    <table class="table table-top-countries">
                                        <tbody>
                                            @foreach($kategoris as $ktgry)
                                            <tr>
                                                <td>{{ $ktgry->tkategori_id }}</td>
                                                <td>{{ $ktgry->tkategori_nama_kategori }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
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