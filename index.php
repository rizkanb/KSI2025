<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 40px;
        }
        h2 {
            color: #333;
        }
        a {
            background-color: #007BFF;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 6px;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah_mahasiswa.php">+ Tambah Mahasiswa</a>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        <?php
        $no = 1;
        $result = $conn->query("SELECT * FROM mahasiswa");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $no++ . "</td>
                        <td>" . $row['nim'] . "</td>
                        <td>" . $row['nama'] . "</td>
                        <td>" . $row['jurusan'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Belum ada data mahasiswa</td></tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
