<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HMIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Helvetica', sans-serif;
        }

        .hero {
            background: linear-gradient(135deg, #0d6efd, #001f3f);
            color: white;
            padding: 100px 20px;
        }

        .btn-tech {
            background-color: #0d6efd;
            color: white;
            border-radius: 25px;
            padding: 10px 25px;
        }

        .btn-tech:hover {
            background-color: #001f3f;
        }

        .card-custom {
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        footer {
            background: #001f3f;
            color: white;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand fw-bold">HMIT</span>

        <!-- MENU LOGIN -->
        <div>
            @auth
                <a href="/dashboard" class="btn btn-light btn-sm">Dashboard</a>
            @else
                <a href="/login" class="btn btn-light btn-sm">Login</a>
            @endauth
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero text-center">
    <h1>Himpunan Mahasiswa Informatika</h1>
    <p>Wadah mahasiswa untuk berkembang di dunia teknologi</p>

    <!-- Tombol utama -->
    <a href="/pendaftaran" class="btn btn-tech mt-3">Gabung Sekarang</a>

    <!-- ADMIN ONLY -->
    @auth
        @if(auth()->user()->role == 'admin')
            <br><br>
            <a href="/lihat-aspirasi" class="btn btn-warning">
                Lihat Semua Aspirasi
            </a>
        @endif
    @endauth
</section>

<!-- Tentang -->
<section class="container p-5 text-center">
    <h2 class="text-primary mb-3">Tentang Kami</h2>
    <p>
        HMIT adalah organisasi mahasiswa yang berfokus pada pengembangan
        skill di bidang teknologi, pemrograman, dan inovasi digital.
    </p>
</section>

<!-- Program Kerja -->
<section class="bg-light p-5">
    <div class="container text-center">
        <h2 class="text-primary">Program Kerja</h2>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <img src="{{ asset('image/pwti.jpeg') }}" class="img-fluid rounded mb-3">
                    <h5>Kelas PWTI</h5>
                    <p>Pelatihan coding untuk memperdalam materi perkuliahan</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <img src="{{ asset('image/guestlecture.jpeg') }}" class="img-fluid rounded mb-3">
                    <h5>Guest Lecture</h5>
                    <p>Seminar teknologi untuk menambah wawasan mahasiswa</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <img src="{{ asset('image/itbootcamp.jpeg') }}" class="img-fluid rounded mb-3">
                    <h5>IT Bootcamp</h5>
                    <p>Pelatihan intensif dan lomba pembuatan website</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center p-3">
    © 2026 HMIT 🚀
</footer>

</body>
</html>