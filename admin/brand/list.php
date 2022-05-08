<?php 
require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/loai.php';
include '../khung.php';

?>

<main>
    <span class="name_menu">Loại hàng</span>
    <a class="add-user" href="add.php">Thêm mới</a>
    
    <table>
        <thead>
            <tr>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Hình ảnh</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php loai_list() ?>
        </tbody>
    </table></main>
</body>
<img src="" alt="">

</html>