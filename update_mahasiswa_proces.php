<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"]

    $sql = "UPDATE mahasiswa SET nama = '$nama', nim= '$nim' WHERE id= '$id";
    if (mysqli_query($conn, $sql)) {
        echo "Mahasiswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($con);
?>