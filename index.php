<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <center>Data </center>
    <a href="/bio/create.php">Input Data </a>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>tggl lahir</th>
            <th>jenis kelamin</th>
            <th>agama</th>
            <th>umur</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $bio = new bio();
            $no = 1;
            foreach($bio->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tggl lahir']; ?></td>
            <td><?php echo $data['jenis kelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
        <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">Delete</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
