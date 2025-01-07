@extends('view_data_pinjaman') <!-- Mengganti layout 'viewdet' dengan 'view_data_pinjaman' -->

@section('konten')
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>List Detail Peminjaman</h4>
    <a class="btn btn-success" href="{{route('main')}}">Tambah Peminjaman</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nomor Peminjaman</th>
                <th>ID Anggota</th>
                <th>Nama Anggota</th>
                <th>ID Buku</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Denda</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $data)
            <tr>
                <td>{{ $data->nopinjam }}</td>
                <td>{{ $data->idanggota }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->idbuku }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tgl_pinjam }}</td>
                <td>{{ $data->tgl_kembali }}</td>
                <td>{{ $data->denda }}</td>
                <td>
                    <a href="{{ route('detailedit', $data->nopinjam) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('detaildelete', $data->nopinjam) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
