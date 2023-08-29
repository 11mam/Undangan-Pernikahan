<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];

$sql="insert into tbundangan (nama,pesan) values('$nama','$pesan')";

// mysqli_query($connect, "INSERT INTO tbundangan (nama,pesan)
// values ('$nama','$pesan')");

$hasil=mysqli_query($kon,$sql);

?>
