<?php
include 'connect.php';
if($_GET['button'] == 'kategori'){
$id = $_GET['id'];
$delete = mysqli_query($connect, "DELETE FROM kategori WHERE id = '$id' ");

header("location: index.php");
}else{
    $id = $_GET['id']; 
    $delete = mysqli_query($connect, "DELETE FROM produk WHERE id = '$id' ");
    
    header("location: produk.php");
}
?>