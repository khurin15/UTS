<?php
require_once "db.php";
$sql = "SELECT * FROM data_kopma";
$hasil = $conn->query($sql);

?>

<table border="1" cellpadding="3">
<tr> 
<th>Nomor</th>
<th>id_barang</th>
<th>nama_barang</th>
<th>harga_barang</th>
<th>Aksi</th>
</tr>
<?php
$nomor = 0;
while($row = $hasil->fetch_assoc())
{
    $nomor++;
    ?>
<tr>
<td><?=$nomor;?></td>
<td><?=$row['id_barang'];?></td>
<td><?=$row['nama_barang'];?></td>
<td><?=$row['harga_barang'];?></td>
<td>
<a href="update.php?id_barang=<?=$row['id_barang'];?>">Update</a>
<a href="proses_delete.php?id_barang=<?=$row['id_barang'];?>">Hapus</a>
</td>
</tr>
<?php
}
?>
</table>

<a href="create.php">Tambah Data</a><!--ini untuk buat link mengarah ke suatu URL-->

