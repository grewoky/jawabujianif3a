@extends('view_data_pinjaman') 

@section('konten')
<div class="container mt-5">
    <h4 class="text-center mb-4">Edit Detail Peminjaman</h4>
    <form action="{{route('detailupdate', $details->nopinjam)}}" method="POST">
        @csrf

        <div class="card p-4 shadow-sm">
            <div class="formbold-input-group mb-3">
                <label class="formbold-form-label" for="buku">Buku yang dipinjam:</label>
                <select class="formbold-form-select form-control" name="buku" id="buku">
                    @forelse ($buku as $buku)
                    <option value="{{ $buku->idbuku }}" {{ $buku->idbuku == $details->idbuku ? 'selected' : '' }}>{{ $buku->judul_buku }}</option>
                    @empty
                    <option value="">Tidak ada buku tersedia</option>
                    @endforelse
                </select>
            </div>

            <div class="formbold-input-group mb-3">
                <label class="formbold-form-label" for="anggota">Anggota yang meminjam:</label>
                <select class="formbold-form-select form-control" name="anggota" id="anggota">
                    @forelse ($anggota as $anggota)
                    <option value="{{ $anggota->idanggota }}" {{ $anggota->idanggota == $details->idanggota ? 'selected' : '' }}>{{ $anggota->nama_anggota }}</option>
                    @empty
                    <option value="">Tidak ada anggota yang terdaftar</option>
                    @endforelse
                </select>
            </div>

            <div class="formbold-input-group mb-3">
                <label class="formbold-form-label" for="tgl_pinjam">Tanggal Pinjam:</label>
                <input type="date" name="tgl_pinjam" value="{{$details->tgl_pinjam}}" id="tgl_pinjam" class="form-control">
            </div>

            <div class="formbold-input-group mb-3">
                <label class="formbold-form-label" for="tgl_kembali">Tanggal Kembali:</label>
                <input type="date" name="tgl_kembali" value="{{$details->tgl_kembali}}" id="tgl_kembali" class="form-control">
            </div>

            <div class="formbold-input-group mb-3">
                <label class="formbold-form-label" for="denda">Denda:</label>
                <input type="number" name="denda" value="{{$details->denda}}" id="denda" class="form-control" placeholder="Masukkan jumlah denda">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-lg">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
@endsection
