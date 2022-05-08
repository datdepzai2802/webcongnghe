<?php require '../../modules/pdo.php';
pdo_get_connection();
$id = $_GET['id'];
require '../../modules/history.php';
delete_dh($id);
$sql = "DELETE FROM chi_tiet_don WHERE id_don_hang=$id";
    pdo_execute($sql);
header('location:list.php');
?>