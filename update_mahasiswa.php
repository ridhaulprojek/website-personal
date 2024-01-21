<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hi>Daftar Mahasiswa</h1>
    <?php
    include "koneksi.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $qsql = "select * from mahasiswa where id; ='$id' ";
        $hasil = mysqli_query($conn, $qsql);

        if(mysqli_num_rows($hasil) > 0){
            $row = mysqli_fetch_assoc($hasil);
            $id = $row['id'];
            $nama = $row['nama'];
            $nim = $row['nim'];
        }

        else{
            echo " data kosong ";
        }
    }else {
        echo " id tidak dapat didapatkan dari form sebelumnya";
    }
    ?>
    <!-- Form untuk menambahkan mahasiswa -->
    <form action="update_mahasiswa_proses.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?php echo $id ;?>" readonly="true" >

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>">

        <label for="nim">NIM</label>
        <input type="text" name="nim" value="<?php echo $nim; ?>">

        <button type="submit">Tambah Mahasiswa</button>
</form>
</body>
</html>