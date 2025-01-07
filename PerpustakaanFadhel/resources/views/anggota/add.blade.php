@extends('view_data_anggota')

@section('konten')

    <div class="container mt-5">
        <h4 class="text-center text-primary mb-4">Penambahan Anggota</h4>

        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5>Formulir Anggota Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('anggotasubmited') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama_anggota">Nama Anggota:</label>
                        <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat:</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-3">Tambah Anggota</button>
                </form>
            </div>
        </div>
    </div>

@endsection
