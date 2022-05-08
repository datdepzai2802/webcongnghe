<?php require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/taikhoan.php';
include '../khung.php';
?>
<main>
    <span class="name_menu">List User</span>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Số điện thoại</th>
                <th>Vai trò</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php user_list()?>
        </tbody>
    </table>
</main>
</body>
<img src="" alt="">
</html>