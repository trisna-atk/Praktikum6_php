<?php 
require_once '../../database/dbkoneksi.php';
$id=$_GET['iddel'];
$sql="DELETE FROM produk WHERE id=?";
$statment = $dbh->prepare($sql);
$statment->execute([$id]);
// redirect page
header('location:../../pages/produk/list_produk.php');
?>