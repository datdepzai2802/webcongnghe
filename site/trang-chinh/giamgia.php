<div class="title">
  <img src="<?= $CONTENT_URL ?>/img/thunder.png" alt="" />
  <h3>Giá sốc hôm nay</h3>
</div>
<div class="product">
  <?php
  $sale_product = sale_product();
  foreach ($sale_product as $rows) {
  ?>
    <div class="product-details">
      <div class="img">
        <img src="<?= $CONTENT_URL ?>/img/<?php echo $rows['hinh'] ?>" alt="" />
      </div>
      <div class="description">

      </div>
    </div>
  <?php
  }
  ?>
</div>