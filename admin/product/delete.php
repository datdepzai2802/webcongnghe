<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
require '../../modules/sanpham.php';
hang_remove($id);
header('location:list.php');
?>