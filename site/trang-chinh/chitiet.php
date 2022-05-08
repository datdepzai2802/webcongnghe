<?php
require "../../dao/product.php";
require "../../global.php";
require "../../dao/gio_hang.php";
require "../../dao/binh_luan.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php require_once "../../site/trang-chinh/header.php" ?>
    <?php
    if (isset($_REQUEST['add_to_cart'])) {
        $find_cart = select_product_in_cart($_REQUEST['id_product'], $_SESSION['user']['id_user']);
        if ($find_cart) {
            $quantity = $find_cart['so_luong'] + $_REQUEST['quantity_detail'];
            update_cart_in_cart($quantity, $_REQUEST['id_product'], $_SESSION['user']['id_user']);
        } else {
            $result = select_product($_REQUEST['id_product']);
            add_to_cart($result['ten_san_pham'], $result['hinh'], $result['gia'], $_REQUEST['quantity_detail'], $result['id_sp'], $_SESSION['user']['id_user']);
        }
    }
    if (isset($_REQUEST['id_product'])) {
        $product = show_product($_REQUEST['id_product']);
    }
    ?>
    <div class="details-sanpham">
        <div class="boxs-sanpham">
            <div class="img">
                <a href=""><img src="<?= $CONTENT_URL ?>/img/<?php echo $product['hinh_sp'] ?>" alt="" /></a>
            </div>
            <form action="" method="post">
                <div class="box-content-sanpham">
                    <div class="detal">
                        <div class="">
                            <h3><?php echo $product['ten_san_pham'] ?></h3>
                        </div>
                        <div class="span">
                            <span><?php echo $product['mo_ta'] ?></span>
                        </div>
                        <div class="gia">Giá : <span id="gia"><?php echo $product['gia'] ?></span> </div>
                    </div>
                    <hr />
                    <div class="tonggia">
                        <div class="sl">
                            <p>Số lượng</p>
                            <span class="tru">-</span> <input name="quantity_detail" type="text" id='quantity' placeholder="0" value="1" /><span class="cong">+</span>
                        </div>
                        <div class="tonggia-sp">
                            <span>Tổng giá :</span>
                            <p id='tong'></p>
                        </div>
                    </div>
                    <script>
                        var gia = parseInt($("#gia").text());
                        var soluong = parseInt($("#quantity").val());

                        function tongtien() {
                            gia = parseInt($("#gia").text());
                            soluong = parseInt($("#quantity").val());
                            console.log(gia, soluong);
                            $("#tong").text(gia * soluong)
                        }
                        tongtien();
                        console.log($(".tru"))
                        var count = 1;
                        $(".tru").click(function() {
                            count--;
                            if (count <= 1) {
                                count = 1;
                            }
                            $("#quantity").val(count)
                            tongtien()
                        })
                        $(".cong").click(function() {
                            count++;
                            if (count >= 99) {
                                count = 99;
                            }
                            $("#quantity").val(count)
                            tongtien()
                        })
                    </script>
                    <hr />
                    <div class="btn-detal">
                        <button name="add_to_cart" class="them">Thêm vào giỏ</button>
                        <a href="giohang.php?by_now=<?php echo $_REQUEST['id_product'] ?>" class="mua">Mua ngay</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <section class="binhluan">
        <div class="title">
            <h3>Đánh giá phía khách hàng</h3>
            <hr />
        </div>
        <div class="conment">
            <?php
            $result = select_all_comment($_REQUEST['id_product']);
            foreach ($result as $rows) {
            ?>
                <div class="danhgiasp">
                    <div class="item-bl">
                        <span><?php echo $rows['username'] ?></span> <br>
                        <span><?php echo $rows['noi_dung'] ?></span>
                        <p><?php echo $rows['thoi_gian_binh_luan'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            if (isset($_REQUEST['binhluan'])) {
                add_comment($_REQUEST['content'], $_REQUEST['id_product'], $_SESSION['user']['id_user']);
                echo "<script>
                 window.location = window.location.href;
                    </script>";
            }
            ?>
            <?php
            if (isset($_SESSION['user'])) {
            ?>
                <div class="btn_comment">
                    <form action="" method="post" class="btn_comm";>
                        <input name="content" autocomplete="off" type="text" placeholder="Ý kiến của bạn về sản phẩm" />
                        <button name="binhluan" type="submit">Gửi đi</button>
                    </form>
                </div>
            <?php
            }

            ?>

        </div>
    </section>
    <footer>
        <div class="fhead">
            <div class="contact">
                <h2>Liên hệ</h2>

                <span>NIIT - ICT HÀ NỘI</span><br />
                <span>Tầng 3, 25T2, N05, Nguyễn thập, Cầu Giấy, Hà Nội </span><br />
                <span>02435574074 - 0383180086</span><br />
                <span>hello@niithanoi.edu.vn</span><br />
                <span>niithanoi.edu.vn</span>
                <div class="boximg">
                    <img src="<?= $CONTENT_URL?>/img/dmca_protected_16_120 1.png" alt="" />
                    <img src="<?= $CONTENT_URL?>/img/boCongThuong 1.png" alt="" />
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
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/fb_logo (2) 1.png" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/zalo_logo (1) 1.png" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/ytb_logo (1) 1.png" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/insta_logo (1) 1.png" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/sendo (1) 1.png" alt="" /></a>
                    </li>
                    <li>
                        <a href=""><img src="<?= $CONTENT_URL?>/img/shoppe (1) 1.png" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="hr"></div>

        <div class="address">
            <span>Copyright @ 2002 NIIT - ICT HÀ NỘI. All rights reserved. <br />
                Địa chỉ: Tầng 3, 25T2, N05, Nguyễn Thị Thập, Cầu Giấy, Hà Nội. Email:
                hello@niithanoi.edu.vn. <br />
                Tel: 0243.557.4074Số Đăng ký: A-2277. cấp: Bộ Khoa Học và Công
                Nghệ</span>
        </div>
    </footer>
</body>

</html>