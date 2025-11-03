<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="post">
    <input type="text" name="nim" placeholder="NIM" required><br>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="text" name="prodi" placeholder="Prodi" required><br>
    <button type="submit" name="submit">Tambah Data</button>
</form>
