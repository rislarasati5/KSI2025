<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim  = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama','$nim','$jurusan')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nim" placeholder="NIM"><br>
    <input type="text" name="jurusan" placeholder="Jurusan"><br>
    <button type="submit" name="submit">Tambah</button>
</form>
