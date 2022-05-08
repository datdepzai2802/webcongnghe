<?php require_once "../../dao/history_order.php";
require_once "../../dao/user.php";
require_once "../../global.php";
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
    <?php require_once "header.php"; ?>
    <div class="body_account">
        <div class="container_account">
            <h2>TÀI KHOẢN</h2>

            <div class="box_account">
                <div class="menu_account">
                    <div class="box_user">
                        <div class="img"><img style="width: 50%;" src="../../content/img/<?php echo $_SESSION['user']['avatar']; ?>" alt=""></div>
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
                    <h3>Đơn hàng của tôi</h3>
                    <table border="1" class="tab-donhang">
                        <tr>
                            <th>
                                Mã đơn hàng
                            </th>                         
                            <th>
                                Số Điện thoại
                            </th>
                            <th>
                                Địa chỉ nhận hàng
                            </th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                       
                        <?php
                    $result = show_order();
                    foreach ($result as $rows) {
                    ?>  
                     <tr>
                        <td style="display: none;"><?php echo $rows['id_account'] ?></td>
                        <td><?php echo $rows['id_don_hang'] ?></td>
                        <td><?php echo $rows['sdt_nguoi_mua'] ?></td>
                        <td><?php echo $rows['dia_chi_nhan_hang'] ?></td>
                        <td><?php echo $rows['thanhtien'] ?></td>
                        <td><?php echo $rows['status'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </table>
                    
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
                    <img src="../../conten/img/dmca_protected_16_120 1.png" alt="">
                    <img src="../../cntent/img/boCongThuong 1.png" alt="">
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
                    <li><a href=""><img src="img/fb_logo (2) 1.png" alt=""></a></li>
                    <li><a href=""><img src="img/zalo_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="img/ytb_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="img/insta_logo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="img/sendo (1) 1.png" alt=""></a></li>
                    <li><a href=""><img src="img/shoppe (1) 1.png" alt=""></a></li>
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