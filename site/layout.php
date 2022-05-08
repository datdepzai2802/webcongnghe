<?php

require "../../dao/slider.php";
require "../../dao/loai.php";
require "../../dao/product.php";
require "../../dao/gio_hang.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" />
</head>

<body>
  <?php require_once "../../site/trang-chinh/header.php" ?>
  <div class="container">
    <!-- banner -->
    <div class="banner">
      <?php
      if (isset($_REQUEST['add_to_cart'])) {
        $find_cart = select_product_in_cart($_REQUEST['add_to_cart'], $_SESSION['user']['id_user']);
        if ($find_cart) {
          $quantity = $find_cart['so_luong'] + 1;
          update_cart_in_cart($quantity, $_REQUEST['add_to_cart'], $_SESSION['user']['id_user']);
        } else {
          $result = select_product($_REQUEST['add_to_cart']);
          add_to_cart($result['ten_san_pham'], $result['hinh'], $result['gia'], 1, $result['id_sp'], $_SESSION['user']['id_user']);
        }
      }
      $slider = slider_selectall();
      foreach ($slider as $rows) {
      ?>
        <a href="chitiet.php?id_product=<?php echo $rows['id_sp'] ?>">
        <img src="<?= $CONTENT_URL ?>/img/<?php echo $rows['url_slider'] ?>" alt="" />
        </a>
      <?php
      }

      ?>
    </div>
    <!-- sản phẩm giảm giá -->
    <section class="box-newproduct">
      <?php require "trang-chinh/giamgia.php"; ?>
    </section>

    <section class="box-listproduct">
      <?php require "trang-chinh/loaihang.php"; ?>
    </section>

    <section class="product-hot">
      <?php require "trang-chinh/sanphamhot.php"; ?>
    </section>
  </div>
  <section class="banner1">
    <div class="box-banner1">
      <img src="<?= $CONTENT_URL ?>/img/banner_newsletter.png" alt="" />
      <form action="">
        <input type="text" placeholder="Nhập email của bạn" required />
        <button>Đăng ký</button>
      </form>
    </div>
  </section>
  <section class="warranty">
    <div class="item-warranty">
      <div class="img">
        <img src="<?= $CONTENT_URL ?>/img/srv_1.png" alt="">
      </div>
      <div class="content-item">
        <p>1 đổi 1</p>
        <span>Ít nhất 6 tháng</span>
      </div>
    </div>

    <div class="item-warranty">
      <div class="img">
        <img src="<?= $CONTENT_URL ?>/img/srv_2.png" alt="">
      </div>
      <div class="content-item">
        <p>Mua hàng tiết kiệm</p>
        <span>Sản phẩm ưu đã so với giá thị trường</span>
      </div>
    </div>

    <div class="item-warranty">
      <div class="img">
        <img src="<?= $CONTENT_URL ?>/img/srv_3.png" alt="">
      </div>
      <div class="content-item">
        <p>Thanh toán dễ dàng</p>
        <span>Thanh toán nhiều hình thức:COD,chuyển khoản</span>
      </div>
    </div>

    <div class="item-warranty">
      <div class="img">
        <img src="<?= $CONTENT_URL ?>/img/srv_4.png" alt="">
      </div>
      <div class="content-item">
        <p>Chính hãng 100%</p>
        <span>Sản phẩm được nhập khẩu chính hãng</span>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer>
    <div class="fhead">
      <div class="contact">
        <h2>Liên hệ</h2>

        <span>NIIT - ICT HÀ NỘI</span><br>
        <span>Tầng 3, 25T2, N05, Nguyễn thập, Cầu Giấy, Hà Nội </span><br>
        <span>02435574074 - 0383180086</span><br>
        <span>hello@niithanoi.edu.vn</span><br>
        <span>niithanoi.edu.vn</span>
        <div class="boximg">
          <img src="img/dmca_protected_16_120 1.png" alt="">
          <img src="img/boCongThuong 1.png" alt="">
        </div>
      </div>

      <div class="policy">
        <h2>Chính sách</h2>

        <ul>
          <li><a href="">Chính sách bảo mật</a></li>
          <li><a href="">Chính sách vận chuyển</a></li>
          <li><a href="">Chính sách đổi trả</a></li>
        </ul>
      </div>

      <div class="communications">
        <h2>Kênh thông tin</h2>

        <ul>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/fb_logo (2) 1.png" alt=""></a></li>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/zalo_logo (1) 1.png" alt=""></a></li>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/ytb_logo (1) 1.png" alt=""></a></li>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/insta_logo (1) 1.png" alt=""></a></li>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/sendo (1) 1.png" alt=""></a></li>
          <li><a href=""><img src="<?= $CONTENT_URL ?>/img/shoppe (1) 1.png" alt=""></a></li>
        </ul>
      </div>
    </div>

    <div class="hr">

    </div>

    <div class="address">
      <span>Copyright @ 2002 NIIT - ICT HÀ NỘI. All rights reserved. <br>
        Địa chỉ: Tầng 3, 25T2, N05, Nguyễn Thị Thập, Cầu Giấy, Hà Nội. Email: hello@niithanoi.edu.vn. <br>
        Tel: 0243.557.4074Số Đăng ký: A-2277. cấp: Bộ Khoa Học và Công Nghệ</span>
    </div>
  </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
<script>
  $('.banner').slick({
    autoplay: true,
    infinite: true,
    autoplaySpeed: 2000,
    prevArrow: "<i class='fa fa-angle-left'></i>",
    nextArrow: "<i class='fa fa-angle-right'></i>",
  });
</script>