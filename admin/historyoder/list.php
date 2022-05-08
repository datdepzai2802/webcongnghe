<?php 
require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/history.php';
include '../khung.php';

?>

<main>
    <span class="name_menu">Đơn hàng</span> 
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sản phẩm</th>
                <th>ID tài khoản</th>
                <th>Tên người mua</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ nhận</th>
                <th>Thời gian đặt</th>
                <th>Thành tiền</th>
                <th colspan="2">Trạng thái</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php donhang_list() ?>
        </tbody>
    </table>
</main>
</body>


</html>