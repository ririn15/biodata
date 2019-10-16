<?php 
include '../database.php';
$bio = new bio();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
    $id = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $tl = $data['tanggal_lahir'];
    $jk = $data['jenis_kelamin'];
    $agama = $data['agama'];
    $umur = $data['umur'];
}
if($aksi == "tambah")
{
    $bio->create($id,$nama,$alamat,$tl,$jk,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "update")
{
    $bio->update($id,$nama,$alamat,$tl,$jk,$agama,$umur);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $bio->delete($_GET['id']);
    header("location:index.php");
}
?>