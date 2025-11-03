<?php
require 'koneksi.php';

// kalau form dikirim
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];

    $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) 
            VALUES ('$nim', '$nama', '$jurusan', '$angkatan')";

    if ($koneksi->query($sql)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menambahkan data: " . $koneksi->error;
    }
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Tambah Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">Tambah Data Mahasiswa</div>
      <div class="card-body">
        <form method="post">
          <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Angkatan</label>
            <input type="text" name="angkatan" class="form-control" required>
          </div>
          <button type="submit" name="submit" class="btn btn-success">Simpan</button>
          <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
