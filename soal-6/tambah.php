<?php
include 'connect.php';

if(isset($_POST['nama_kategori'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $insert = mysqli_query($connect, "INSERT INTO kategori (id, nama) VALUES ('$id', '$nama')");
    header("location: index.php");
}else{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];
    $insert = mysqli_query($connect, "INSERT INTO produk (nama, stok, deskripsi, categori_id) VALUES ('$nama', '$stok', '$deskripsi', '$id')");
    header("location: produk.php");
}
?>