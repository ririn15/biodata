<?php 
class Database {
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db="biodata";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi)
        {
            // echo "berhasil";
        } else {
            return "Koneksi Database Gagal";
        }
    }
}
class Bio extends Database {
    // Menampilkan Semua Data
    public function index()
    {

        $databio = mysqli_query($this->koneksi,"select * from bio");
        // var_dump($datasiswa);
        return $databio;
    }
    // Menambah Data
    public function create($nama, $alamat,$tgl_lahir,$jenkel,$agama,$umur)
    {
        
        mysqli_query($this->koneksi,"insert into bio values('','$nama', '$alamat','$tgl_lahir','$jenkel','$agama','$umur')");
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $databio = mysqli_query($this->koneksi,"select * from bio where id='$id'");
        return $databio;
    }
    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $databio = mysqli_query($this->koneksi,"select * from bio where id='$id'");
        return $databio;
    }
    // mengupdate data berdasarkan id
    public function update($id,$nama, $alamat,$tgl_lahir,$jenkel,$agama,$umur)
    {
        mysqli_query($this->koneksi,"update bio set nama='$nama', alamat='$alamat',tgl_lahir='$tgl_lahir',jenkel='$jenkel',umur='$umur' where id='$id'");
    }
    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from bio where id='$id'");
    }
}
// koneksi DB
$db = new Database();
?>