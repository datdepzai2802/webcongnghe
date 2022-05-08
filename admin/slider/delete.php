<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
require '../../modules/slider.php';
slider_remove($id);
header('location:list.php');
?>