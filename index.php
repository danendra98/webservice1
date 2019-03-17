<?php
    include 'tampil.php';
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB SERVICE</title>
</head>
<body>
    <hr>
    <h5>#Tugas1</h5>
    <h1>Hello World</h1>
    <p>Nama : Davis Danendra S.</p>
    <p>NIM  : 16.01.53.0119</p>
    <hr>
    <h5>#Tugas2</h5>
    <left><h2>Data Mahasiswa</h2></left>
    <table id="customers" border="2">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Progdi</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
            <td><?=$d['prodi']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>