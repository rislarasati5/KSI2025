<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama','$nim','$jurusan')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='index.php';
              </script>";
        exit;
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa - KSI2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f1f8f4;
    }
    .navbar {
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    footer {
      background-color: #198754;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand fw-bold" href="#">KSI2025</a>
    <a href="index.php" class="btn btn-outline-light btn-sm">← Kembali</a>
  </div>
</nav>

<!-- Form Tambah Data -->
<div class="container mt-5" style="max-width: 600px;">
  <div class="card border-success shadow-sm">
    <div class="card-header bg-success text-white">
      <strong>Tambah Data Mahasiswa</strong>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control border-success" placeholder="Masukkan Nama" required>
        </div>

        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" name="nim" id="nim" class="form-control border-success" placeholder="Masukkan NIM" required>
        </div>

        <div class="mb-3">
          <label for="jurusan" class="form-label">Jurusan</label>
          <input type="text" name="jurusan" id="jurusan" class="form-control border-success" placeholder="Masukkan Jurusan" required>
        </div>

        <button type="submit" name="submit" class="btn btn-success w-100">Simpan</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 KSI2025 - Tambah Data Mahasiswa</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
