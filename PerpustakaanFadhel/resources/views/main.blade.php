<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Perpustakaan Fadhel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <header>
        <div class="container-fluid bg-dark py-3">
            <h1 class="text-center text-white">Perpustakaan Fadhel</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Perpustakaan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Peminjaman</a></li>
                        <li class="nav-item"><a class="nav-link" href="/bukuview">Buku</a></li>
                        <li class="nav-item"><a class="nav-link" href="/anggotaview">Anggota</a></li>
                        <li class="nav-item"><a class="nav-link" href="/detailview">Detail</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="d-flex justify-content-between mb-4">
            <h2>Transaksi Peminjaman</h2>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{Route('confirm')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="buku" class="form-label">Buku yang Dipinjam</label>
                        <select class="form-select" name="buku" id="buku">
                            @forelse ($buku as $buku)
                            <option value="{{ $buku->idbuku }}">{{ $buku->judul_buku }}</option>
                            @empty
                            <option value="">Tidak ada buku tersedia</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="anggota" class="form-label">Anggota yang Meminjam</label>
                        <select class="form-select" name="anggota" id="anggota">
                            @forelse ($anggota as $anggota)
                            <option value="{{ $anggota->idanggota }}">{{ $anggota->nama_anggota }}</option>
                            @empty
                            <option value="">Tidak ada anggota</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tgl_kembali" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">Pinjam</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Perpustakaan Fadhel | All Rights Reserved</p>
    </footer>

</body>

</html>
