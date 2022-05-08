<?php
include '../../global.php';
include '../../modules/pdo.php';
include '../../modules/loai.php';
include '../validate.php';
pdo_get_connection();
include '../../modules/sanpham.php';
hang_insert($_POST['ten_san_pham'],$_POST['gia'],$_FILES['hinh'],$_POST['mo_ta'],$_POST['id_loai'],$_POST['sale'],$_POST['so_luong']);
include '../khung.php';
?>
<main>
<span class="name_menu">Thêm sản phẩm</span>
<form action="" method="post" enctype="multipart/form-data">
<span class="link_name" style="color: #000;font-weight: 600;">Tên sản phẩm</span>
<input type="text" name="ten_san_pham"  id="" placeholder="Nhập tên sản phẩm">
<span><?php echo $nameError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Loại hàng</span>
<select name="id_loai" id="">
    <option value="#">Vui lòng chọn...</option>
    <?php array_list('loai_hang', 'id_loai', 'ten_loai');?>
</select>
<span><?php echo $loaiError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Giá</span>
<input type="text" name="gia"  id="" placeholder="Nhập giá sản phẩm">
<span><?php echo $giaError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Số lượng</span>
<input type="text" name="so_luong"  id="" placeholder="Nhập số lượng sản phẩm">
<span><?php echo $soluongError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Hình</span>
<input type="file" name="hinh" class='file' id="" placeholder="Chọn hình ảnh">
<span><?php echo $imageError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Mô tả</span>
<input type="text" name="mo_ta"  id="" placeholder="Nhập mô tả sản phẩm">
<span><?php echo $motaError ?></span>
<span class="link_name" style="color: #000;font-weight: 600;">Giảm giá</span>
<input type="Number" name="sale"  id="" value=0 placeholder="Giảm giá(%)">
<span><?php echo $saleError ?></span>
<input type="submit" class="button" name="btn-add" value="Thêm">
</form>
</main>
</body>

</html>