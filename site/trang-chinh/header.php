<section class="head">
    <div class="headtop">
        <div class="logo">
            <a href="index.php"><img src="<?= $CONTENT_URL ?>/img/Logo4-1 1.png" alt="" /></a>
        </div>

        <div class="search">
            <input id="search" type="text" class="search-text" placeholder="Tìm kiếm sản phẩm" />
            <a href=""><i class="fas fa-search"></i></a>
            <div class="list">

            </div>
        </div>

        <div class="extend">
            <div class="cart">
                <a href="giohang.php"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="user" style="margin: 0 20px;">
                <?php
                if (isset($_SESSION['user'])) {
                ?>
                    <div class="user-dn">
                        <?php check_login();?>
                        <a href="<?php $SITE_URL ?>./chitiet_user.php" class="img_user"><img style="width: 40px ; height: 40px;text-decoration:none;" src="<?= $CONTENT_URL ?>/img/<?php echo $_SESSION['user']['avatar']; ?>" alt=""></a>
                        <a href="?logout" class="logout">logout</a>
                    </div>
                    <?php
                    if (isset($_REQUEST['logout'])) {
                        session_destroy();
                        header('location:dangnhap.php');
                    }
                    ?>

                <?php
                } else {
                ?>
                    <div class="img-ac">
                        <i class="far fa-user"></i>
                        <div class="item-img-ac" style="position: absolute;">
                        <a class="dangky" href="<?php $SITE_URL ?>./dangky.php">Đăng ký</a> 
                        <a class="dangnhap" href="<?php $SITE_URL ?>./dangnhap.php">Đăng nhập</a>
                        </div>
                    </div>
                <?php
                }
                ?>
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
                <li><a href="sanpham.php">Sản phẩm</a></li>
                <li><a href="">Chính sách bảo hành</a></li>
                <li><a href="">24h công nghệ</a></li>
            </ul>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#search").keyup(function() {
        if ($("#search").val().length == 0) {
            $(".list").html("")
        } else {
            $.ajax({
                url: "../../dao/product.php",
                type: "post",
                data: {
                    search: $("#search").val()
                },
                success: function(data) {
                    $(".list").html(data)
                }
            })
        }
    })
</script>