<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	function jalan(){
		alert("berhasil di update");
	}
</script>
<?php 
include "conn.php";
$idbarang = $_POST['id_barang'];
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

$query = "UPDATE `data_barang` SET nama='$nama',harga_jual='$harga_jual',harga_beli='$harga_beli',kategori='$kategori',stok='$stok' WHERE id_barang=$idbarang";

$jalan = mysqli_query($db,$query);
if($jalan){
	echo "<script>jalan();</script>";
	header("location:basic-table.php");
}
else{
	mysql_error();
}
?>

