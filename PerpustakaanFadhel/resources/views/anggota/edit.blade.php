@extends('view_data_anggota')

@section('konten')

    <div class="container mt-5">
        <h4 class="text-center text-warning mb-4">Edit Anggota</h4>

        <div class="card shadow-lg">
            <div class="card-header bg-warning text-white">
                <h5>Edit Data Anggota</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('anggotaupdate', $anggota->idanggota) }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama_anggota">Nama:</label>
                        <input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}" id="nama_anggota" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat:</label>
                        <input type="text" name="alamat" value="{{ $anggota->alamat }}" id="alamat" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" name="jurusan" value="{{ $anggota->jurusan }}" id="jurusan" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-warning btn-block mt-3">Update Anggota</button>
                </form>
            </div>
        </div>
    </div>

@endsection
