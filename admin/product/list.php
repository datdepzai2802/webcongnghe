<?php require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/sanpham.php';
include '../khung.php';
?>
<main>
    <span class="name_menu">Sản phẩm</span>
    <a class="add-user" href="add.php">Thêm mới</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Hình</th>
                <th>Mô tả</th>
                <th>Loại hàng</th>
                <th>Số lượng</th>
                <th>Giảm giá</th>
                <th>Lượt xem</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php hang_list() ?>
        </tbody>
    </table>
</main>
</body>
<img src="" alt="">

</html>