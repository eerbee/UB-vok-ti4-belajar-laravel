<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Belajar Laravel</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Harsya Rahadhani - 183140714111026
                </div>
                <div class="card-body">
                    <!-- <a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a> -->
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->category }}</td>
                                <td>{{ $p->image }}</td>
                                <!-- <td>
                                    <a href="/pegawai/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pegawai/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
