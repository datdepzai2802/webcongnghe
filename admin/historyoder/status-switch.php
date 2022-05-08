<?php require '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
require '../../modules/history.php';
$id_don_hang=$_GET['id'];
donhang_edit($id_don_hang,$_POST['status']);
include '../khung.php';
?>
<main>
    <span class="name_menu">Sửa user có ID=<?=$id_account?></span>
    <form action="" method="post" enctype="multipart/form-data">
<div>
    <span class="link_name" style="color: #000;font-weight: 600;">Vai trò</span>
        <select name="status" id="">
            <?php foreach (status as $key => $value) : ?>
                <option value="<?php echo $key ?>"><?php echo $value ?></option>
                <?php endforeach ?>
        </select>
</div>
<div>
            <input type="submit" class="button" name="btn-add" id="" value="Thêm">
        </div>
    </form>
</main>
</body>

</html>