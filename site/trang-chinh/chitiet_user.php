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
    <?php require_once "../../site/trang-chinh/header.php" ?>
    <div class="body_account">
        <div class="container_account">
            <h2>TÀI KHOẢN</h2>

            <div class="box_account">
                <div class="menu_account">
                    <div class="box_user">
                        <div class="img"><img style="width: 50%;" src="<?= $CONTENT_URL?>/img/<?php echo $_SESSION['user']['avatar']; ?>" alt=""></div>
                        <div class="nameuser">
                            <h3><?php echo $_SESSION['user']['username']; ?></h3>
                        </div>
                        <div class="btn">
                            <a href="?logout"><button type="submit">Đăng xuất</button></a>
                        </div>
                    </div>
                    <div class="menu_list">
                        <ul>
                            <li><a href="chitiet_user.php">Tài khoản của tôi</a></li>
                            <li><a href="chi_don_hang.php">Đơn hàng của tôi</a></li>
                            <li><a href="change_pass.php">Đổi mật khẩu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content_account">
                    <h3>Thông tin cá nhân</h3>
                    <hr style="color: #c3c3c3de;">
                     <div class="p">
                      <p>Họ tên: <?php echo $_SESSION['user']['username']; ?></p> 
                      <p>Gmail: <?php echo $_SESSION['user']['mail']; ?></p> 
                      <p>Phone: <?php echo $_SESSION['user']['sdt']; ?></p> 
                      <p>vVai</p> 
                     
                      
                     </div>
                </div>
            </div>
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
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/fb_logo (2) 1.png" alt=""></a></li>
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/zalo_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/ytb_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/insta_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/sendo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="<?= $CONTENT_URL?>/img/shoppe (1) 1.png" alt=""></a></li>
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