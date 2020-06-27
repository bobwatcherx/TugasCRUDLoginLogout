               

                <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> nama </th>
                          <th> nama barang </th>
                          <th> kategori </th>
                          <th> harge beli </th>
                          <th> harge jual </th>
                          <th>stok</th>
                          <th> Progress </th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php 
                      include ("conn.php");

                        $query = "select * from data_barang";
                        $result = mysqli_query($db,$query);
                          while($row = mysqli_fetch_assoc($result)):
                        ?>
                          <td class="py-1">
                            <img src="images/<?php echo $row['gambar'] ?>" alt="<?php echo $row['nama'] ?>" 
                            style="width:80px;height:80px"/> </td>
                          <td> <?php echo $row["nama"]?> </td>
                         
                          <td> <?php echo $row["kategori"]?> </td>
                         <td> <?php echo $row["harga_beli"]?> </td>
                         <td> <?php echo $row["harga_jual"]?> </td>
                         <td> <?php echo $row["stok"]?> </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><a
                            style="color:white"
                            href="edit.php?edit=<?php echo $row['id_barang']?>"
                            type="button" class="btn btn-primary"
                            >Edit</a> || 
                            <a
                            style="color:white"
                            href="hapus.php?delete=<?php echo $row['id_barang']?>"
                            type="button" class="btn btn-danger"
                            >hapus</a></td>
                        </tr>
                      <?php endwhile; ?>
                      </tbody>
                    </table>