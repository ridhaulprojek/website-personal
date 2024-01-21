<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Website</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Form untuk menambahkan mahasiswa -->
    <form action="tambah_mahasiswa.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        
        <label for="nim">NIM:</label>
        <input type="text" name="nim" required>

        <button type="submit">Tambah Mahasiswa</button>
    </form>

    <!-- Tabel untuk menampilkan daftar mahasiswa -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
        </tr>
<!-- Data mahasiswa akan ditampilkan di sini -->
<?php
include("koneksi.php");

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["nim"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data mahasiswa.</td></tr>";
}

mysqli_close($conn);
?>

    </table>
</body>
</html>