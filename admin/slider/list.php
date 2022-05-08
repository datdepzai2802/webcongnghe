<?php 
require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/slider.php';
include '../../modules/sanpham.php';
include '../khung.php';
?>
<main>
    <span class="name_menu">Slider</span>
    <a class="add-user" href="add.php">Thêm mới</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên slider</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php slider_list() ?>
        </tbody>
    </table>
</main>
</body>
<img src="" alt="">

</html>