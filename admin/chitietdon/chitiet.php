<?php session_start();
require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
$id_don_hang=$_GET['id_don_hang'];
$sql="SELECT * FROM chi_tiet_don WHERE id_don_hang=$id_don_hang";
$list_don = pdo_query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=$admin_url?>/css/list-user.css">
    <link rel="stylesheet" href="<?=$admin_url?>/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<main>
    <span class="name_menu">Chi tiết sản phẩm đơn hàng có ID:<?=$id_don_hang?></span>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_don as $u) :?>
            <tr>
                <td><?=$u['id_hang_chitiet']?></td>
                <td><?=$u['id_sp']?></td>
                <td><?=$u['so_luong']?></td>
                <td><?=$u['gia']?></td>
            </tr>    
            <? endforeach; ?>
        </tbody>
    </table></main>
</body>
<img src="" alt="">

</html>