<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<?php
include ("conn.php");
$id = $_GET['edit'];
$query = "select * from data_barang WHERE id_barang = $id";
$jalan = mysqli_query($db,$query);
while($row = mysqli_fetch_array($jalan)):
?>
<h3>EDIT FORM</h3>
<div class="container">
	<form action="prosesedit.php" method="POST">
	<input type="hidden" name="id_barang" class="form-control"value="<?php echo $row['id_barang'] ?>">
		 <label for="exampleInputEmail1">nama</label>

	<input type="text"  name="nama" class="form-control"value="<?php echo $row['nama'] ?>">
	 <label for="exampleInputEmail1">harga beli</label>
<input type="text"  name="harga_beli"class="form-control"value="<?php echo $row['harga_beli'] ?>">
	 <label for="exampleInputEmail1">harga jual</label>
<input type="text"  name="harga_jual" class="form-control" value="<?php echo $row['harga_jual'] ?>">
 <label for="exampleInputEmail1">Stok</label>
<input type="text" name="stok" class="form-control" value="<?php echo $row['stok'] ?>">
	 <input class="form-check-input" type="radio" name="kategori" id="exampleRadios1" value="Elektronik" checked>
  	<label class="form-check-label" for="kategori">
    Elektronik
  </label>
  <br>
  <input class="form-check-input" type="radio" name="kategori" id="exampleRadios1" value="komputer" >
  	<label class="form-check-label" for="exampleRadios1">
    komputer
  </label><br>
  <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
 <?php endwhile; ?>
