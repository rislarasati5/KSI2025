<?php
include 'koneksi.php';

// Ambil data dari database
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>
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
  <div class="container">
    <a class="navbar-brand fw-bold" href="#"> SI2025</a>
  </div>
</nav>

<!-- Body -->
<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-success fw-bold">Data Mahasiswa</h2>
    <!-- Tombol Tambah Data -->
    <a href="tambah_data.php" class="btn btn-success px-4">➕ Tambah Data</a>
  </div>

  <!-- Tabel Data -->
  <div class="card shadow-sm">
    <div class="card-header bg-success text-white">
      <strong>Daftar Mahasiswa</strong>
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered table-striped mb-0">
        <thead class="table-success">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['nim']}</td>
                    <td>{$row['jurusan']}</td>
                  </tr>";
            $no++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 KSI2025 - Data Mahasiswa</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
