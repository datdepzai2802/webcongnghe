<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
include '../../modules/taikhoan.php';
user_remove($id);
header('location:list.php');
?>