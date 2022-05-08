<?php
require "../../global.php";
require "../../dao/user.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="../../content/css/style.css" />
</head>

<body>
  <section class="head">
    <div class="headtop">
      <div class="logo">
        <a href="index.php"><img src="<?= $CONTENT_URL ?>/img/Logo4-1 1.png" alt="" /></a>
      </div>

      <div class="search">
        <input type="text" class="search-text" placeholder="Tìm kiếm sản phẩm" />
        <a href=""><i class="fas fa-search"></i></a>
      </div>

      <div class="extend">
        <div class="cart">
          <a href=""><i class="fas fa-shopping-cart"></i></a>
        </div>

        <div class="user">
          <a href=""><i class="fas fa-user-alt"></i></a>
        </div>
      </div>
    </div>
    <div class="nav">
      <div class="table">
        <ul>
          <li>
            <a href="">Danh mục sản phẩm</a>
          </li>
        </ul>
      </div>

      <div class="menu">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          <li><a href="">Sản phẩm</a></li>
          <li><a href="">Chính sách bảo hành</a></li>
          <li><a href="">24h công nghệ</a></li>
        </ul>
      </div>
    </div>
  </section>
  <?php
  $result = '';
  if (isset($_REQUEST['login'])) {
    extract($_REQUEST);
    $result =  login($username, $pass);
    if ($result != "") {
      $_SESSION['user'] = [
        'id_user' => $result['id_account'],
        'username' => $result['username'],
        'pass' => $result['pass'],
        'mail' => $result['mail'],
        'avatar' => $result['avatar'],
        'sdt' => $result['sdt'],
        'vaitro' => $result['vaitro']
      ];

      echo $_SESSION['user']['sdt'];

      if ($_SESSION['user']['vaitro'] == 1) {
        header('location:../../admin/index.php');
      } else {
        header('location:index.php');
      }
    }
  }

  ?>
  <div class="container-form">
    <div class="box-form">
      <h2>Đăng nhập tài khoản</h2>
      <form action="" method="POST" class="form-input">
        <div class="mail">
          <label for=""></label>
          <input type="text" name="username" placeholder="Nhập userName của bạn của bạn">
        </div>
        <div class="Mật khẩu">
          <label for=""></label>
          <input type="password" name="pass" placeholder="Mật khẩu">
        </div>
        <div class="suport">
          <a href="">Quên mật khẩu</a>
          <a href="dangky.php">Đăng ký</a>
        </div>
        <button name="login" type="submit">Đăng Nhập</button>
      </form>
    </div>
  </div>

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

</html>