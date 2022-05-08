<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
require '../../modules/binhluan.php';
binhluan_remove($id);
header('location:list.php');
?>