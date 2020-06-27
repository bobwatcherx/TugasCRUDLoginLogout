<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<form method="POST" action="basic-table.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">nama Barang</label>
    <input  name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga beli</label>
    <input  name="harga_beli" type="text" class="form-control" id="exampleInputPassword1" placeholder="harga beli">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">harga jual</label>
    <input name="harga_jual"  type="text" class="form-control" id="exampleInputPassword1" placeholder="harga jual">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">stok</label>
    <input name="stok"  type="number" value="1" class="form-control" id="exampleInputPassword1" placeholder="stok">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="kategori" id="exampleRadios1" value="Komputer" checked>
  <label class="form-check-label" for="exampleRadios1">
   Komputer
  </label>
    <input class="form-check-input" type="radio" name="kategori"  id="exampleRadios1" value="Elektronik" checked>
  <label class="form-check-label" for="exampleRadios1">
   Elektronik
  </label>
</div>
   <input type="file" name="image">
 <input type="submit" value="simpan" name="upload">
</form>
<script>
  function hainama(){
Swal.fire(
  'data berhasil di tambahkan',
  'Refresh browser',
  'success'
)
}
</script>
<?php
include ("conn.php");
  if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
 

    $target = "images/".basename($image);

    $path = $_FILES['file']['tmp_name'];
 $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $kategori = mysqli_real_escape_string($db, $_POST['kategori']);
    $harga_beli = mysqli_real_escape_string($db, $_POST['harga_beli']);
    $harga_jual = mysqli_real_escape_string($db, $_POST['harga_jual']);
    $stok = mysqli_real_escape_string($db, $_POST['stok']);
   

    $sql = "INSERT INTO data_barang (id_barang,kategori,nama,gambar,harga_beli,harga_jual,stok) VALUES (NULL,'$kategori','$nama','$image','$harga_beli','$harga_jual','$stok')";
 $success =  mysqli_query($db, $sql);
      if($success){
        echo "<script>hainama();</script>";
    }

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
?>
<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

</script>