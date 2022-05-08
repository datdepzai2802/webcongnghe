<?php
require "../../dao/gio_hang.php";
require "../../global.php";
require "../../dao/product.php";
require "../../dao/history_order.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Giỏ hàng</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" />
</head>

<body>
  <?php require_once "../../site/trang-chinh/header.php" ?>
  <section class="container-giohang">
    <div class="box-giohang">
      <div class="title">
        <h3>Giỏ hàng của bạn</h3>
        <hr>
      </div>
    </div>

    <div class="sanpham-giohang">
      <table border="1" class="tab">
        <tr>
          <th>Sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Đơn giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
          <th>Mua ngay</th>
          <th>Delete</th>
        </tr>
        <?php
        if (isset($_REQUEST['delete_sp'])) {
          delete_product_in_cart($_REQUEST['delete_sp']);
        }
        if (isset($_SESSION['user']['id_user'])) {
          $result = order_select_by_user($_SESSION['user']['id_user']);
          foreach ($result as $rows) {
        ?>
            <tr class='row'>
              <td style="display: none;" id="id_cart"><?php echo $rows['id_gio_hang'] ?></td>
              <td>
                <div class="img"><img width="50%" src="<?= $CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt=""></div>
              </td>
              <td class="ten_sp"><?php echo $rows['ten_sp'] ?></td>
              <td class="gia"><?php echo number_format($rows['gia'])  ?>đ</td>
              <td class='quantity'> <span class='cong'>+</span> <br>
                <input type="text" value="<?php echo $rows['so_luong'] ?>">
                <span class="tru">-</span>
              </td>
              <td><input class="thanhtien" readonly type="text" value=""></td>
              <td><a style=" text-decoration: none;
                            color: #39be8e;
                            width: 70px;
                            font-weight: 600;
                            border-radius: 5px;"   href="?by_now=<?php echo $rows['id_sp'] ?>&quantity_bynow=<?php echo $rows['so_luong'] ?>" class="muangay-giohang">Mua ngay</a></td>
              <td><a onclick=" return confirm('bạn có muốn thực hiện hành động này không ?') " href="?delete_sp=<?php echo $rows['id_gio_hang'] ?>" class="delete"><i class="far fa-trash-alt"></i></a></td>
            </tr>
        <?php
          }
        }
        ?>
      </table>
    </div>
    <div class="tong">
      Tổng Cộng: <span id="tongcong"></span><br>
      <a href="?by_all=<?php echo $rows['id_gio_hang'] ?>" class="thanhtoan">Thanh toán</a>
    </div>
  </section>

  <section class="container-dathang">
    <div class="title">
      <h3>Thông tin giao hàng</h3>
      <hr>
    </div>
    <form method="post" class="form-giaohang">
      <div class="cot1">
        <div class="title">
          <h3>Thông tin người mua</h3>
        </div>
        <div class="input-khachhang">
          <input name="email" type="text" placeholder="Email">
          <input name="name" type="text" placeholder="Họ và tên">
          <input name="sdt" type="text" placeholder="Số điện thoại">
          <input name="address" type="text" placeholder="Địa chỉ nhận hàng">
        </div>
      </div>
      <div class="cot2">
        <?php
        if (isset($_REQUEST['by_now'])) {
          $result = select_product($_REQUEST['by_now']);
        ?>
          <div class="thongtinsp">
            <div class="title">
              <h3>Thông tin đơn hàng</h3>
            </div>
            <span style="display: none;" class="id_sp"><?php echo  $rows['id_sp'] ?></span>
            <div class="input-donhang">
              <div class="img">
                <img width="50%" src="<?= $CONTENT_URL ?>/img/<?php echo $result['hinh'] ?>" alt="">
              </div>
              <div class="noidung">
                <div class="ten_sp">
                  <h3><?php echo $result['ten_san_pham'] ?></h3>
                </div>
                <div class="gia">
                  <span><?php echo number_format($result['gia'])  ?>đ</span>
                </div>
                <div class="so_luong">
                  số lượng <span><?php
                                  if (isset($_REQUEST['quantity_bynow'])) {
                                    echo $_REQUEST['quantity_bynow'];
                                  } else {
                                    echo '1';
                                  }
                                  ?></span>
                </div>
              </div>
            </div>
          </div>

          <?php
        } elseif (isset($_REQUEST['by_all'])) {
          $result = order_select_by_user($_SESSION['user']['id_user']);
          foreach ($result as $rows) {
          ?>
            <div class="thongtinsp">
              <div class="title">
                <h3>Thông tin đơn hàng</h3>
              </div>
              <span style="display: none;" class="id_sp"><?php echo  $rows['id_sp'] ?></span>
              <div class="input-donhang">
                <div class="img">
                  <img width="50%" src="<?= $CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt="">
                </div>
                <div class="noidung">
                  <div class="ten_sp">
                    <h3><?php echo $rows['ten_sp'] ?></h3>
                  </div>
                  <div class="gia">
                    <span><?php echo number_format($rows['gia'])  ?>đ</span>
                  </div>
                  <div class="so_luong">
                    số lượng <span><?php echo $rows['so_luong'] ?></span>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
        <? ?>
        <div class="btn_thanhtoan">
          <a href=""></a>
          Tổng giá: <span>0đ</span>
          <?php if (isset($_SESSION['user'])) { ?>
            <button onclick="order(<?php echo $_SESSION['user']['id_user'];  ?>)" name="thanhtoan" type="button">Thanh toán</button>
          <?php } else { ?>
            <a style="text-decoration: none;
            background-color: #ff5106;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;" href="dangnhap.php">Thanh toán</a>
          <?php } ?>
        </div>
      </div>
    </form>
    <?php
    require_once "../../dao/gio_hang.php";
    ?>
  </section>
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
          <img src="<?= $CONTENT_URL ?>/img/dmca_protected_16_120 1.png" alt="">
          <img src="<?= $CONTENT_URL ?>/img/boCongThuong 1.png" alt="">
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
<script>
  // console.log($(".a")[0].textContent)
  var array_gia = [];
  var all_gia = $(".gia").text();
  array_gia = all_gia.split('đ')
  var all_quantity = $(".quantity > input")
  var thanhtien = $(".thanhtien")
  var sum = 0;
  for (var i = 0; i < thanhtien.length; i++) {
    thanhtien.eq(i).val(Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
    }).format(parseInt(array_gia[i].split(',').join('')) * parseInt($(".quantity > input").eq(i).val())))
  }
  for (var i = 0; i < thanhtien.length; i++) {
    var deleted = thanhtien.eq(i).val().split('₫').join('');
    var deletedot = deleted.split('.').join('')
    var finally_money = deletedot.replace(/\s/g, '')
    sum += parseInt(finally_money);
  }
  $("#tongcong").text(Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND'
  }).format(sum))

  function tongtien(index) {
    var giatien = index.closest('.row').find('.gia').text()
    var soluong = index.closest('.row').find('.quantity > input').val()
    var tongtien = (parseInt(giatien.split(',').join('')) * parseInt(soluong))

    index.closest('.row').find('.thanhtien').val(Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
    }).format(tongtien))
    thanhtien = $(".thanhtien")
    sum = 0;

    for (var i = 0; i < thanhtien.length; i++) {
      var deleted = thanhtien.eq(i).val().split('₫').join('');
      var deletedot = deleted.split('.').join('')
      var finally_money = deletedot.replace(/\s/g, '')
      sum += parseInt(finally_money);
    }
    $("#tongcong").text(Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
    }).format(sum))
  }


  $(".cong").click(function() {
    var quantity = $(this).next().next();
    $(this).next().next().val(parseInt(quantity.val()) + 1);
    if (quantity.val() >= 99) {
      quantity.val(99)
    }
    tongtien($(this))
    $.ajax({
      url: "../../dao/gio_hang.php",
      type: "post",
      data: {
        quantity: quantity.val(),
        id_cart: $(this).closest('.row').find('#id_cart').text()
      },
      success: function(result) {
        console.log(result)
      }
    })
  })
  $(".tru").click(function() {
    var quantity = $(this).prev();
    $(this).prev().val(parseInt(quantity.val()) - 1);
    if (quantity.val() <= 1) {
      quantity.val(1)
    }
    tongtien($(this))
    $.ajax({
      url: "../../dao/gio_hang.php",
      type: "post",
      data: {
        quantity: quantity.val(),
        id_cart: $(this).closest('.row').find('#id_cart').text()
      },
      success: function(result) {
        console.log(result)
      }
    })
  })
  var final_price = $(".thongtinsp .gia span");
  var final_quantity = $(".thongtinsp .so_luong span");
  var temp = 0;
  var thanhtoan = 0;
  if (final_quantity.length >= 1) {
    for (var i = 0; i < final_price.length; i++) {
      var deleted = final_price.eq(i).text().split('đ').join('');
      var deletedot = deleted.split(',').join('')
      // thanhtoan.text(parseInt(deletedot) * parseInt(final_quantity.eq(i).text()))
      temp = parseInt(deletedot) * parseInt(final_quantity.eq(i).text())
      thanhtoan += temp;
    }
    $(".btn_thanhtoan > span").text(Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
    }).format(thanhtoan))
  } else {
    $("#btn_thanhtoan > span").text('0 đ')
  }
</script>
<script>
  var total_money = $(".btn_thanhtoan span");
  total_money = total_money.eq(0).text().split('₫').join('');
  total_money = total_money.split('.').join('')
  total_money = total_money.replace(/\s/g, '')

  console.log($(".thongtinsp .id_sp"))
  console.log($(".thongtinsp .gia span"))
  console.log($(".thongtinsp .so_luong span"))
  console.log($(".thongtinsp .ten_sp h3"))

  var list_id_sp = [];
  var list_gia = [];
  var list_so_luong = [];
  var list_ten_sp = [];

  for (var i = 0; i < $(".thongtinsp .id_sp").length; i++) {
    list_id_sp[i] = $(".thongtinsp .id_sp").eq(i).text();
    list_gia[i] = $(".thongtinsp .gia span").eq(i).text().split('đ').join('');
    list_gia[i] = list_gia[i].split(',').join('')
    list_gia[i] = list_gia[i].replace(/\s/g, '')
    list_so_luong[i] = $(".thongtinsp .so_luong span").eq(i).text();
    list_ten_sp[i] = $(".thongtinsp .ten_sp h3").eq(i).text();
  }

  function order(id_user) {
    var infor = {
      id_user: id_user,
      email: $(".input-khachhang input").eq(0).val(),
      name: $(".input-khachhang input").eq(1).val(),
      phone: $(".input-khachhang input").eq(2).val(),
      address: $(".input-khachhang input").eq(3).val(),
      money: total_money
    }

    $.ajax({
      url: "../../dao/gio_hang.php",
      type: "post",
      data: {
        order: infor,
        list_id_sp: JSON.stringify(list_id_sp),
        list_gia: JSON.stringify(list_gia),
        list_so_luong: JSON.stringify(list_so_luong),
        list_ten_sp: JSON.stringify(list_ten_sp)
      },
      success: function(data) {
        console.log(data)
      }
    })

  }
  console.log($(".input-khachhang input").eq(0).val())
</script>