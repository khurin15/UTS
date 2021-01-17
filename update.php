<?php
require_once "db.php";

$id_barang = $_GET['id_barang'];
$sql = "SELECT * FROM data_kopma WHERE id_barang = '".$id_barang."'";
$hasil = $conn->query($sql);
$barang = $hasil->fetch_object();

?>
<form action="proses_update.php"method ="POST">
id_barang :<input type="text" name="id_barang" value="<?=$barang->id_barang;?>">
nama_barang :<input type="text" name="nama_barang" value="<?=$barang->nama_barang;?>">
harga_barang :<input type="text" name="harga_barang" value="<?=$barang->harga_barang;?>">
<button type="submit">Simpan</button>
</form>