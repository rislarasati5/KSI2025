<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">KSI2025</a>
  </div>
</nav>

<!-- Body -->
<div class="container mt-5">
  <h2 class="text-center mb-4">Data Mahasiswa</h2>

  <?php
  // Data Mahasiswa (array sederhana)
  $mahasiswa = [
    ["nim" => "230101001", "nama" => "Larasati", "prodi" => "Informatika"],
    ["nim" => "230101002", "nama" => "Zahira Shofi", "prodi" => "Sistem Informasi"],
    ["nim" => "230101003", "nama" => "Dewi Anggraini", "prodi" => "Teknik Komputer"]
  ];
  ?>

  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($mahasiswa as $mhs) {
        echo "<tr>
                <td>{$no}</td>
                <td>{$mhs['nim']}</td>
                <td>{$mhs['nama']}</td>
                <td>{$mhs['prodi']}</td>
              </tr>";
        $no++;
      }
      ?>
    </tbody>
  </table>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
  <p>© 2025 KSI2025 - Data Mahasiswa</p>
</footer>

</body>
</html>
