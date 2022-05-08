<?php 
require_once '../../global.php';
require_once '../../modules/pdo.php';
require_once '../../modules/slider.php';
require_once '../validate.php';
pdo_get_connection();
slider_insert($_POST['ten_slider'],$_POST['url'],$_POST['hinh']);
require_once '../khung.php';
?>
<main>
<form action="" method="post" enctype="multipart/form-data">
<span class="link_name" style="color: #000;font-weight: 600;">Tên slider</span>
<input type="text" name="ten_slider"  id="" placeholder="Nhập tên slider">
<!-- <span><?php echo $nameError ?></span> -->
<span class="link_name" style="color: #000;font-weight: 600;">Hình ảnh</span>
<input type="file" name="hinh" class='file' id="" placeholder="Chọn hình ảnh">
<!-- <span><?php echo $imageError ?></span> -->
<span class="link_name" style="color: #000;font-weight: 600;">URL slider</span>
<input type="text" name="url"  id="" placeholder="Nhập URL slider">
<input type="submit" class='button' name="btn-add" value="Thêm">    
</form>
</main>
</body>

</html>