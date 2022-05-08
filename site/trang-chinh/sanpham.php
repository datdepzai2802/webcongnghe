<?php

require "../../dao/product.php";
require "../../global.php";
require "../../dao/gio_hang.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" />
</head>

<body>
    <?php require_once "../../site/trang-chinh/header.php" ?>
    <!-- sản phẩm -->
    <div class="box-container">
        <section class="container_sanpham">
            <div class="title">
                <h3>Sản phẩm</h3>
            </div>
            <div class="hot2">
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
                
                $result_all_product = select_all_product();
                foreach ($result_all_product as $rows) {
                ?>
                    <div class="box-sanpham">
                        <a href="chitiet.php?id_product=<?php echo $rows['id_sp'] ?>">
                            <div class="box-item">
                                <div class="img">
                                    <img src="<?= $CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt="" />
                                </div>
                                <div class="items">
                                    <span><?php echo $rows['ten_san_pham'] ?></span>
                                    <p><?php echo $rows['gia'] ?></p>
                                    <div class="btn">
                                        <a href="?add_to_cart=<?php echo $rows['id_sp'] ?>"><i class="fas fa-cart-plus"></i></a>
                                        <a  href="giohang.php?by_now=<?php echo $rows['id_sp'] ?>"class="mua">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php

                }

                ?>

            </div>
    </div>
    </div>

    </section>

    <!-- sản phẩm hot -->
    <section class="product-hot hot2">
        <div class="title">
            <h3>Sản phẩm bán chạy</h3>
        </div>
        <div class="list-hotproduct">
            <?php
            $seller =  seller_product();
            foreach ($seller  as $rows) {
            ?>
                <a href="chitiet.php?id_product=<?php echo $rows['id_sp'] ?>">
                    <div class="box-item">
                        <div class="img">
                            <img src="<?= $CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt="" />
                        </div>
                        <div class="item">
                            <span><?php echo $rows['ten_san_pham'] ?></span>
                            <p><?php echo $rows['gia'] ?></p>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>

        </div>
    </section>
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