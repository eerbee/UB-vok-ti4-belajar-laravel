@extends('layouts.backend.hal_buku')

@section('content')
    <script>
        var codeBlock = '<h2 class="title-1">DATA BUKU</h2>';
        document.getElementById("title_page").innerHTML = codeBlock
    </script>

    @if ($message = Session::get('succes'))
        <div class="alert alert-succes">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <form class="form-header" action="{{ route('buku.index')}}" method="get">
                                <input class="au-input au-input--xl" type="text" name="q" placeholder="Pencarian Data Buku" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <form action="{{route('buku.create')}}">
                                <button class="au-btn au-btn-icon au-btn--blue">
                                    <i class="zmdi zmdi-plus"></i>ADD BUKU 
                                </button>
                            </form>
                        </div>
                        <div class="card m-t-25">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"><center>ID</center></th>
                                        <th scope="col" width="11%"><center>ID Buku</center></th>
                                        <th scope="col" width="25%"><center>Judul</center></th>
                                        <th scope="col" width="15%">Penulis</th>
                                        <th scope="col" width="13%">Kategori</th>
                                        <th scope="col" width="3%"><center>Tahun</center></th>
                                        <th scope="col" ><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bukus as $buku => $b)
                                    <tr>
                                        <td align="center"> 
                                            {{ $bukus->firstItem() + $buku }}
                                        </td>
                                        <td>                {{ $b->tbuku_id }}</td>
                                        <td>                {{ $b->tbuku_judul }}</td>
                                        <td>                {{ $b->tbuku_penulis }}</td>
                                        <td>                {{ $b->tkategori_nama_kategori }}</td>
                                        <td align="center"> {{ $b->tbuku_tahun_terbit }}</td>
                                        <td align="center">
                                            <a href="{{ route('buku.show', $b->tbuku_id) }}" class="btn btn-secondary btn-sm"> Detail </a>
                                            <a href="{{ route('buku.edit', $b->tbuku_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{route('buku.destroy', $b->tbuku_id)}}" method="post" style="float: right;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $bukus->links() !!}
                        </div>
                    </div>
                </div>
                <div class="row m-t-25">
                    
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