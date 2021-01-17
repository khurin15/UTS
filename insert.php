<?php
require_once "db.php";

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];

$sql = "INSERT INTO data_kopma (id_barang, nama_barang, harga_barang) 
VALUES ('".$id_barang."','".$nama_barang."','".$harga_barang."') ";
if($conn->query($sql)){
    echo "data sudah berhasil ditambahkan";
}
else
{
    die("Error: " . $conn->error);
}



die;
?>
//concatination adalah penjumlahan string lambangnya pake titik kalo di php
