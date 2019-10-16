<?php 
include '../database.php';
$bio = new bio();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>
<body>
    <?php 
        foreach($bio->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tl = $data['tanggal_lahir'];
            $jk = $data['jenis_kelamin'];
            $agama = $data['agama'];
            $umur = $data['umur'];

        }
    ?>
    <fieldset>
        <legend>Show Data </legend>
        <table>
            <tr>
                <th>id</th>
                <td><input type="number" name="id" value="<?php echo $id; ?>"readonly></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>alamat</th></th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <th>tanggal lahir</th>
                <td><input type="date" name="tl" value="<?php echo $tl; ?>" readonly></td>
            </tr>
            <tr>
                <th>jenis kelamin</th>
      <p><input type='radio' name='jenis_kelamin' value='pria' />Pria</p>
      <p><input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan</p>
            </tr>
            <tr>
                <th>agama</th>
                <td><input type="select" name="agama" value="<?php echo $agama; ?>" readonly></td>
            </tr>
            <tr>
                <th>umur</th>
                <td><input type="number" name="umur" value="<?php echo $umur; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>