<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Pendaftaran HMIT</h2>

    <!-- ERROR VALIDASI -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- NOTIFIKASI SUKSES -->
    @if (session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
    @endif

    <form action="/pendaftaran" method="POST">
        @csrf
    
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Alasan Bergabung</label>
            <textarea name="alasan" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
        <a href="/" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>