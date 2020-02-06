@extends('layouts.backend.hal_buku')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">DATA BUKU</h2>
                            <form action="{{url('buku/tambah_buku')}}">
                            <button class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>ADD BUKU 
                            </button>
                            </form>
                        </div>
                        <div class="card m-t-25">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">ID Buku</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Penerbit</th>
                                        <th scope="col">Tahun Terbit</th>
                                        <th scope="col"><center>Option</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($bukus as $b)
                                    <tr>
                                        <th scope="row">{{ $b->id }}</th>
                                        <td>{{ $b->id_buku }}</td>
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td align="center">
                                            <a href="{{ url('buku/' . $b->id . '/edit_buku') }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ url('buku/' . $b->id . '/delete') }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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