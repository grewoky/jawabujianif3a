<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data Anggota</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src='main.js'></script>
    <style>
        /* Custom styles */
        body {
            background-color: #f0f8ff;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            color: #007bff;
            margin-top: 50px;
            font-weight: bold;
        }

        .navbar {
            background-color: #343a40 !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            margin-right: 20px;
        }

        .navbar-nav .nav-link:hover {
            color: #ff7f50 !important;
        }

        .container {
            padding-top: 30px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .card-body {
            background-color: #ffffff;
        }

        .card-footer {
            background-color: #f8f9fa;
            text-align: right;
        }

        footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        /* Styling for responsive layout */
        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }

            .navbar-nav {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <h1 class="text-center">Data Anggota</h1>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Peminjaman</a></li>
                    <li class="nav-item"><a class="nav-link" href="/bukuview">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="/anggotaview">Anggota</a></li>
                    <li class="nav-item"><a class="nav-link" href="/detailview">Detail</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-3 container">
        @yield('konten')
    </div>

    <footer>
        <p>&copy; 2025 Perpustakaan Fadhel | All Rights Reserved</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
