
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link id="switch-css" rel="stylesheet" href="<?=$admin_url?>/css/style.css">
    <script src="js/dark.js"></script>
    <link rel="stylesheet" href="<?=$admin_url?>/css/list-user.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="sidebar dong">
        <div class="logo-details">
            <i class='bx bx-message-square-dots'></i>
            <span class="logo_name">ADMIN</span>
        </div>
        <ul class="nav-links">
        <li>
                <a href="/">
                <i class='bx bx-home'></i>
                    <span class="link_name">Trang chủ</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Trang chủ</a></li>
                </ul>
            </li>
            <li>
                <a href="<?=$admin_url?>/index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Trang chủ admin</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Trang chủ admin</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Loại hàng</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Loại hàng</a></li>
                    <li><a href="<?=$admin_url?>/brand/list.php">Danh sách loại hàng</a></li>
                    <li><a href="<?=$admin_url?>/brand/add.php">Thêm loại hàng</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Sản phẩm</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Sản phẩm</a></li>
                    <li><a href="<?=$admin_url?>/product/list.php">Danh sách sản phẩm</a></li>
                    <li><a href="<?=$admin_url?>/product/add.php">Thêm sản phẩm</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-user'></i>
                        <span class="link_name">Tài khoản</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Tài khoản</a></li>
                    <li><a href="<?=$admin_url?>/user/list.php">Danh sách tài khoản</a></li>
                    <li><a href="<?=$admin_url?>/user/add.php">Thêm tài khoản</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                    <i class='bx bx-slideshow'></i>
                        <span class="link_name">Slider</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Slider</a></li>
                    <li><a href="<?=$admin_url?>/slider/list.php">Danh sách slider</a></li>
                    <li><a href="<?=$admin_url?>/slider/add.php">Thêm slider</a></li>
                </ul>
            </li>
            <li>
                <a href="<?=$admin_url?>/comment/list.php">
                <i class='bx bx-comment-detail'></i>
                    <span class="link_name">Bình luận</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Bình luận</a></li>
                </ul>
            </li>
            <li>
                <a href="<?=$admin_url?>/historyoder/list.php">
                <i class='bx bx-cart' ></i>
                    <span class="link_name">Đơn hàng</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Đơn hàng</a></li>
                </ul>
            </li>
            <li>
                <a href="../site/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link_name">Đăng xuất, <?php echo $_SESSION['username'] ?></span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?=$root_url?>/logout.php" onclick="confirm('Bạn có muốn đăng xuất')">Đăng xuất, <?php echo $_SESSION['usernameadm'] ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Menu</span>
        </div>
    </section>
    <script src="<?=$admin_url?>/js/button-menu.js"></script>