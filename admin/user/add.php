<?php require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
require '../../modules/taikhoan.php';
user_insert($_POST['username'],$_POST['pass'],$_POST['email'],$_POST['hinh'],$_POST['vaitro'], $_POST['sdt']);
include '../khung.php';
?>
<main>
    <span class="name_menu">Thêm user</span>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <span class="link_name" style="color: #000;font-weight: 600;">Username</span>
            <input type="text" name="username" id="" placeholder="Nhập Username">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Email</span>
            <input type="email" name="email" id="" placeholder="Nhập Email">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Password</span>
            <input type="text" name="pass" id="" placeholder="Nhập Password">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Số điện thoại</span>
            <input type="text" name="sdt" id="" value="Trống" placeholder="Nhập Password">
        </div>
        <div>
            <span class="link_name" style="color: #000;font-weight: 600;">Chọn ảnh đại diện(Tùy chọn)</span>
            <input style="height: 35px;" type="file" name="hinh" placeholder="Chọn ảnh">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Vai trò</span>
            <select name="vaitro" id="">
                <?php foreach (vaitro as $key => $value) : ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
        <div>
            <input type="submit" class="button" name="btn-add" id="" value="Thêm">
        </div>
    </form>
</main>
</body>

</html>