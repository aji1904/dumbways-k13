<?php
 include 'header.php';
?>
    <div style="margin: 50px 20px;">
    <center style="font-size: 30px; ">
        Produk<br><br>
    </center>
    <a href="form-kategori.php?button=produk">
      <button type="button" class="btn btn-success">Tambah Produk</button>
    </a>
    <br>
    <br>
    <table class="table" border=1>
  <thead>
    <tr align="center">
      <th scope="col">No</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Stok</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Kategori ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $show = mysqli_query($connect, "SELECT kategori.nama as kategori_nama, produk.nama, produk.stok, produk.deskripsi, produk.categori_id, produk.id FROM produk JOIN kategori ON kategori.id = produk.categori_id");
    $no =1;
    foreach($show as $row){
    ?>
    <tr align="center">
      <th scope="row"><?=$no?></th>
      <td><?= $row['nama'];?></td>
      <td><?= $row['stok'];?></td>
      <td><?= $row['deskripsi'];?></td>
      <td><?= $row['kategori_nama'];?></td>
      <td><?= $row['categori_id'];?></td>
      <td>
          <a href="update.php?id=<?= $row['id'];?>&nama=<?= $row['nama'];?>&button=produk&stok=<?= $row['stok'];?>&desc=<?= $row['deskripsi'];?>&cat_id=<?= $row['categori_id'];?>" style="padding-right: 30px;">Edit</a>
          <a href="hapus.php?id=<?= $row['id'];?>?button=produk">Hapus</a>
      </td>
    </tr>
    
    <?php
      $no++;  
    } 
    ?>
  </tbody>
</table>
    </div>

<?php
  include 'footer.php';
?>