<?php
include9("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = " DELETE FROM mahasiswa WHERE id='$id'";

    if ( mysqli_query(4comm, $sql)) {
        header("Location: index.php");
        exit();
    } else { 
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>