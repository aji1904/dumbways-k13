<?php
 include 'header.php';
?>
    <div style="margin: 50px 20px;">
    <center style="font-size: 30px; ">
        Kategori<br><br>
    </center>
    <a href="form-kategori.php?button=kategori">
      <button type="button" class="btn btn-success">Tambah Kategori</button>
    </a>
    <br>
    <br>
    <table class="table" border=1>
  <thead>
    <tr align="center">
      <th scope="col">No</th>
      <th scope="col">Id Kategori</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $show = mysqli_query($connect, "SELECT * FROM kategori");
    $no =1;
    foreach($show as $row){
    ?>
    <tr align="center">
      <th scope="row"><?=$no?></th>
      <td><?= $row['id'];?></td>
      <td><?= $row['nama'];?></td>
      <td>
          <a href="update.php?id=<?= $row['id'];?>&nama=<?= $row['nama'];?>&button=kategori" style="padding-right: 30px;">Edit</a>
          <a href="hapus.php?id=<?= $row['id'];?>&button=kategori">Hapus</a>
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
include 'footer.php'
?>