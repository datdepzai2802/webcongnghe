<?php require_once '../global.php';


include_once 'khung.php';?>
<main>
<div class="tab">
        <span class="name_menu">Loại hàng</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/brand/list.php"><i class='bx bx-list-ol'></i><br>Danh sách loại hàng</a></li>
            <li><a href="<?=$admin_url?>/brand/add.php"><i class='bx bx-add-to-queue'></i><br>Thêm loại hàng</a></li>
        </ul>
    </div>
    <div class="tab">
        <span class="name_menu">Sản phẩm</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/product/list.php"><i class='bx bx-list-ol'></i><br>Danh sách sản phẩm</a></li>
            <li><a href="<?=$admin_url?>/product/add.php"><i class='bx bx-add-to-queue'></i><br>Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="tab">
        <span class="name_menu">Tài khoản</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/user/list.php"><i class='bx bx-list-ol'></i><br>Danh sách tài khoản</a></li>
            <li><a href="<?=$admin_url?>/user/add.php"><i class='bx bx-add-to-queue'></i><br>Thêm tài khoản</a></li>
        </ul>
    </div>
    <div class="tab">
        <span class="name_menu">Slider</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/slider/list.php"><i class='bx bx-list-ol'></i><br>Danh sách slider</a></li>
            <li><a href="<?=$admin_url?>/slider/add.php"><i class='bx bx-add-to-queue'></i><br>Thêm slider</a></li>
        </ul>
    </div>
    <div class="tab">
        <span class="name_menu">Bình luận</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/comment/list.php"><i class='bx bx-list-ol'></i><br>Danh sách bình luận</a></li>
        </ul>
    </div>
    <div class="tab">
        <span class="name_menu">Đơn hàng</span>
        <ul class="list">
            <li><a href="<?=$admin_url?>/historyoder/list.php"><i class='bx bx-list-ol'></i><br>Danh sách đơn hàng</a></li>
        </ul>
    </div>
</main>
</body>

</html>