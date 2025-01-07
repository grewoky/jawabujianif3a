@extends('view_data_buku')

@section('konten')
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between mb-4">
        <h4>List Data Buku</h4>
        <a class="btn btn-success" href="{{ route('bukuadd') }}">Tambah Buku</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Pengarang</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $no => $data)
                <tr>
                    <td>{{ $data->idbuku }}</td>
                    <td>{{ $data->judul_buku }}</td>
                    <td>{{ $data->penerbit }}</td>
                    <td>{{ $data->pengarang }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>
                        <a href="{{ route('bukuedit', $data->idbuku) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('bukudelete', $data->idbuku) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
