<?php
require_once "db.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];

$sql="UPDATE data_kopma SET nama_barang='".$nama_barang."', harga_barang='".$harga_barang."'
WHERE id_barang ='".$id_barang."'";

if($conn->query($sql)){
    echo "Data sudah berhasil diupdate";
    header('Location:index.php');

}else{
    die("Error:".$conn->error);
}

exit;