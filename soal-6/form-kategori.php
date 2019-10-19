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
    <form method="POST" action="tambah.php">
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" class="form-control" name="nama" >
        </div>
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="number" class="form-control" name="id" >
        </div>
        
        <button type="submit" name="nama_kategori" class="btn btn-success">Tambah</button>
    </form>
    </div>
    <?php
    }else if($_GET['button'] == 'produk'){
    ?>
    <center style="font-size: 30px; ">
        Masukkan Produk<br><br>
    </center>
    
    <div style="width: 500px;" class="mx-auto">
    <form method="POST" action="tambah.php">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="nama" >
        </div>
        <div class="form-group">
            <label>Stok Produk</label>
            <input type="number" class="form-control" name="stok" >
        </div>
        <div class="form-group">
            <label>Deskripsi Produk</label>
            <input type="text" class="form-control" name="deskripsi" >
        </div>
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="number" class="form-control" name="id" >
        </div>
        
        <button type="submit" name="nama_produk" class="btn btn-success">Tambah</button>
    </form>
    </div>
    </div>

<?php
    }
include 'footer.php'
?>