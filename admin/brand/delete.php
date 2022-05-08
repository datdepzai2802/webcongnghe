<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
require '../../modules/loai.php';
loai_remove($id);
header('location:list.php');
?>