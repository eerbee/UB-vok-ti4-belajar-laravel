@extends('layouts.admin.kategori_buku.hal_kategori')

@section('content')
    <script>
        var codeBlock = '<h2 class="title-1">KATEGORI BUKU</h2>';
        document.getElementById("title_page").innerHTML = codeBlock
    </script>

    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <form class="form-header" action="{{ route('kategori.index')}}" method="get">
                                <input class="au-input au-input--xl" type="text" name="src" placeholder="Pencarian Kategori Buku" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <form action="{{route('kategori.create')}}">
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>add kategori
                                </button>
                            </form>
                        </div>
                        <div class="card m-t-25">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <center>ID Kategori Buku</center>
                                        </th>
                                        <th scope="col">
                                            <center>Nama Kategori Buku</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>       
                                    @foreach($kategoris as $kategori => $ktgry)
                                    <tr>
                                        <td align="center">{{ $ktgry->tkategori_id }}</td>
                                        <td align="center">{{ $ktgry->tkategori_nama_kategori }}</td>
                                        <td width="25%" align="center">
                                            <form action="{{route('kategori.destroy', $ktgry->tkategori_id)}}" method="post">
                                                <a href="{{route('kategori.edit', $ktgry->tkategori_id)}}" class="btn btn-warning btn-sm">Edit</a>
    
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $kategoris->links() !!}    
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
    <!-- END MAIN CONTENT-->
@stop