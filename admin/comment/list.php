<?php
require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/sanpham.php';
include '../../modules/taikhoan.php';
include '../../modules/binhluan.php';
include '../khung.php';
?>
<main>
    <span class="name_menu">Bình luận</span>
    <table>
        <thead>
            <tr>
                <th>Mã bình luận</th>
                <th>Sản phẩm</th>
                <th>Tài khoản</th>
                <th>Nội dung</th>
                <th>Thời gian</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php binhluan_list() ?>
        </tbody>
    </table>
</main>
</body>
<img src="" alt="">

</html>