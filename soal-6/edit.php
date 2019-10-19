<?php
include 'connect.php';

if(isset($_POST['nama_kategori'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$update = mysqli_query($connect, "UPDATE kategori SET id = '$id', nama = '$nama' WHERE id = '$id' ");

header("location: index.php");
}else{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $desc = $_POST['desc'];
    $cat_id = $_POST['cat_id'];
    $update = mysqli_query($connect, "UPDATE produk SET nama = '$nama', stok = '$stok', deskripsi = '$desc', categori_id = '$cat_id' WHERE id = '$id' ");
    
    header("location: produk.php"); 
}
?>