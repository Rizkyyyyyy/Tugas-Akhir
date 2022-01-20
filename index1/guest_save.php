<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];
$no_telp = $_POST['no_telp'];

$save = mysqli_query($koneksi, "insert into pengunjung values (null, '$nama', '$no_telp', '$alamat', '$pesan')");

if ($save) {
  header('location:guest_book.php');
}
