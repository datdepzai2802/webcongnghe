<div class="title">
  <h3>Sản phẩm bán chạy</h3>
</div>
<div class="list-hotproduct">
  <?php
  $seller =  seller_product_home();
  foreach ($seller  as $rows) {
  ?>
    <div class="hotproduct">
      <a href="chitiet.php?id_product=<?php echo $rows['id_sp'] ?>">
        <div class="img">
          <img src="<?=$CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt="" />
        </div>
        <div class="content">
          <span><?php echo $rows['ten_san_pham'] ?></span>
          <p>Giá: <?php echo $rows['gia'] ?></p>
          <div class="btn">
            <a href="?add_to_cart=<?php echo $rows['id_sp'] ?>"><i class="fas fa-cart-plus"></i></a>
            <a href="giohang.php?by_now=<?php echo $rows['id_sp'] ?>" class="button">Mua ngay</a>
          </div>
        </div>
      </a>
    </div>
  <?php
  }
  ?>

</div>