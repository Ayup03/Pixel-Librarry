@extends('layout/index')
@section('dashboard')
    <h2>Selamat Datang di Pixel Librarry</h2>

    <style>
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn {
            margin-right: 5px;
        }
    </style>


    <div class="button-container">
        <a href="/tambahbuku" class="btn btn-primary">Tambah Buku</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Genre</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Action</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($buku as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>

                    <td>{{ $item->judul_buku }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->pengarang }}</td>
                    <td>
                        <a href="/updatebuku/{{ $item->id }}">Edit</a>
                        <a href="/deletebuku/{{ $item->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
