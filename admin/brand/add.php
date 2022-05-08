<?php 
require_once '../../global.php';
require_once '../../modules/pdo.php';
require_once '../../modules/loai.php';
require_once '../validate.php';
pdo_get_connection();
loai_insert($_POST['ten_loai'],$_FILES['hinh']);
require_once '../khung.php';
?>
<main>
<form action="" method="post" enctype="multipart/form-data">
<span class="link_name" style="color: #000;font-weight: 600;">Tên loại</span>
<input type="text" name="ten_loai"  id="" placeholder="Nhập tên loại">
<span><?php echo $nameError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Hình ảnh</span>
<input type="file" name="hinh" class='file' id="" placeholder="Chọn hình ảnh">
<span><?php echo $imageError ?></span>
<input type="submit" class='button' name="btn-add" value="Thêm">    
</form>
</main>
</body>

</html>