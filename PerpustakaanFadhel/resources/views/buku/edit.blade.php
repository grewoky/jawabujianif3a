@extends('view_data_buku')

@section('konten')
    <h4 class="text-center text-warning mb-4">Edit Buku</h4>

    <form action="{{ route('bukuupdate', $buku->idbuku) }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="judul_buku" class="form-label">Nama Buku:</label>
            <input type="text" name="judul_buku" value="{{ $buku->judul_buku }}" id="judul_buku" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="penerbit" class="form-label">Penerbit:</label>
            <input type="text" name="penerbit" value="{{ $buku->penerbit }}" id="penerbit" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="pengarang" class="form-label">Pengarang:</label>
            <input type="text" name="pengarang" value="{{ $buku->pengarang }}" id="pengarang" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" name="jumlah" value="{{ $buku->jumlah }}" id="jumlah" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Update</button>
    </form>
@endsection
