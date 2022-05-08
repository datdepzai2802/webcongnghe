<?php require_once '../../global.php';
require '../../modules/pdo.php';
pdo_get_connection();
include '../../modules/sanpham.php';
include '../../modules/slider.php';
include '../khung.php';
$id_slider = $_GET['id'];
$slider=slider_select($id_slider);
slider_edit($id_slider,$_POST['ten_slider'],$_POST['hinh'],$_POST['id_sp']);
?>
<main>
<span class="name_menu">Sửa slider ID=<?=$id_slider?></span>
<form action="" method="post" enctype="multipart/form-data">
<span class="link_name" style="color: #000;font-weight: 600;">Tên slider</span>
<input type="text" name="ten_slider"  id="" value="<?=$slider['ten_slider']?>" placeholder="Nhập tên slider">
<!-- <span><?php echo $nameError ?></span> -->
<span class="link_name" style="color: #000;font-weight: 600;">Hình ảnh</span>
<input type="file" name="hinh" class='file' id="" <?=$slider['url_slider']?> placeholder="Chọn hình ảnh">
<!-- <span><?php echo $imageError ?></span> -->
<span class="link_name" style="color: #000;font-weight: 600;">Chọn sản phẩm</span>
<select name="id_sp"  id="">
    <option value="#" default>Vui lòng chọn...</option>
    <?php array_list('san_pham', 'id_sp', 'ten_san_pham');?>
</select>
<input type="submit" class='button' name="btn-add" value="Sửa">    
</form>
</main>
</body>

</html>