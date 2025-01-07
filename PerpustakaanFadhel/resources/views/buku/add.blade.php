@extends('view_data_buku')

@section('konten')
    <h4 class="text-center text-warning mb-4">Penambahan Buku</h4>
    
    <form action="{{ route('bukusubmited') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="judul_buku" class="form-label">Judul Buku:</label>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="penerbit" class="form-label">Penerbit:</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="pengarang" class="form-label">Pengarang:</label>
            <input type="text" name="pengarang" id="pengarang" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form-label">Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
@endsection
