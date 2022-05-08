<?php require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
require '../../modules/taikhoan.php';
$id_account=$_GET['id'];
$user=user_select($id_account);
user_edit($id_account,$_POST['username'],$_POST['pass'],$_POST['email'],$_FILES['hinh'],$_POST['vaitro'], $_POST['sdt']);
include '../khung.php';
?>
<main>
    <span class="name_menu">Sửa user có ID=<?=$id_account?></span>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <span class="link_name" style="color: #000;font-weight: 600;">Username</span>
            <input type="text" name="username" value="<?=$user['username']?>" id="" placeholder="Nhập Username">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Email</span>
            <input type="email" value="<?=$user['mail']?>" name="email" id="" placeholder="Nhập Email">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Password</span>
            <input type="text" value="<?=$user['pass']?>" name="pass" id="" placeholder="Nhập Password">
        </div>
        <div>
        <span class="link_name" style="color: #000;font-weight: 600;">Số điện thoại</span>
            <input type="text" value="<?=$user['sdt']?>" name="sdt" id="" value="Trống" placeholder="Nhập Password">
        </div>
        <div>
            <span class="link_name" style="color: #000;font-weight: 600;">Chọn ảnh đại diện(Tùy chọn)</span>
            <input class="file" value="<?=$user['avatar']?>" type="file" name="hinh" placeholder="Chọn ảnh">
        </div>
        <div>
        <span class="link_name" value="<?=$user['vaitro']?>" style="color: #000;font-weight: 600;">Vai trò</span>
            <select name="vaitro" id="">
                <?php foreach (vaitro as $key => $value) : ?>
                    <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div>
        <div>
            <input type="submit" class="button" name="btn-add" id="" value="Sửa">
        </div>
    </form>
</main>
</body>

</html>