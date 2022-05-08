<?php require_once '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/loai.php';
include '../khung.php';

$id_loai = $_GET['id'];
$loai_select = loai_getinfo($id_loai);
loai_edit($id_loai,$_POST['ten_loai'],$_FILES['hinh']);
?>
<main>
    <span class="name_menu">Sửa loại hàng có ID=<?=$id_loai ?></span>
<form action="" method="post" enctype="multipart/form-data">
<span class="link_name" style="color: #000;font-weight: 600;">Tên loại</span>
<input type="text" name="ten_loai" value="<?=$loai_select['ten_loai']?>"  id="" placeholder="Nhập tên loại">
<span><?php echo $nameError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Hình ảnh</span>
<input type="file" name="hinh" value="<?=$loai_select['hinh']?>"  class='file' id="" placeholder="Chọn hình ảnh">
<span><?php echo $imageError ?></span>
<input type="submit" class='button' name="btn-add" value="Sửa">    
</form>
</main>
</body>

</html>