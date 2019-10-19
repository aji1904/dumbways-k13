<?php
 include 'header.php';
?>
    <div style="margin: 50px 20px;">
    <?php
    if($_GET['button'] == 'kategori'){
    ?>
    <center style="font-size: 30px; ">
        Masukkan Kategori<br><br>
    </center>
    
    <div style="width: 500px;" class="mx-auto">
    <form method="POST" action="edit.php">
    <?php
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    
    ?>
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
        </div>
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="number" class="form-control" name="id" value="<?= $id ?>">
        </div>
        
        <button type="submit" name="nama_kategori" class="btn btn-success">Tambah</button>
    </form>
    </div>
    <?php
    }else{
    ?>
    <center style="font-size: 30px; ">
        Masukkan Produk<br><br>
    </center>
    
    <div style="width: 500px;" class="mx-auto">
    <form method="POST" action="edit.php">
    <?php
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $stok = $_GET['stok'];
    $deskripsi = $_GET['desc'];
    $cat_id = $_GET['cat_id'];
    
    ?>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="hidden" class="form-control" name="id" value="<?= $id ?>">
            <input type="text" class="form-control" name="nama" value="<?= $nama ?>">
        </div>
        <div class="form-group">
            <label>Stok Produk</label>
            <input type="text" class="form-control" name="stok" value="<?= $stok ?>">
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" class="form-control" name="desc" value="<?= $deskripsi ?>">
        </div>
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="number" class="form-control" name="cat_id" value="<?= $cat_id ?>">
        </div>
        
        <button type="submit" name="nama_produk" class="btn btn-success">Tambah</button>
    </form>
    </div>
    </div>

<?php
    }
include 'footer.php'
?>