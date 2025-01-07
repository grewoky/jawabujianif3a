@extends('view_data_anggota')

@section('konten')

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="text-warning">List Data Anggota</h4>
        <a href="{{ route('anggotaadd') }}" class="btn btn-primary">
            <i class="bi bi-person-plus"></i> Tambah Anggota
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jurusan</th>
                    <th>Tanggal Daftar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anggota as $no => $data)
                    <tr>
                        <td>{{ $data->idanggota }}</td>
                        <td>{{ $data->nama_anggota }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->jurusan }}</td>
                        <td>{{ $data->tgl_dftar }}</td>
                        <td class="d-flex">
                            <a href="{{ route('anggotaedit', $data->idanggota) }}" class="btn btn-sm btn-warning me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('anggotadelete', $data->idanggota) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin Menghapus ini?')" class="d-inline">
                                @csrf
                                <button id="delete" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
