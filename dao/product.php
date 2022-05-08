<?php

require_once "pdo.php";

function select_all_product()
{
    $sql = "select * from san_pham ";
    return pdo_query($sql);
}
function sale_product()
{
    $sql = "select * from san_pham order by sale desc limit 5";
    return pdo_query($sql);
}

function seller_product_home()
{
    $sql = "select * from san_pham order by view desc limit 16";
    return pdo_query($sql);
}

function seller_product()
{
    $sql = "select * from san_pham order by view desc limit 5";
    return pdo_query($sql);
}

function show_product($id_product)
{
    $sql = "select *,san_pham.hinh as hinh_sp from san_pham inner join loai_hang on san_pham.id_loai = loai_hang.id_loai where id_sp = ?";
    return pdo_query_one($sql, $id_product);
}

function select_product($id_product)
{
    $sql = "select * from san_pham where id_sp = ? ";
    return pdo_query_one($sql, $id_product);
}

function search_product($keyword)
{
    $sql = "select * from san_pham where ten_san_pham like ?";
    return pdo_query($sql, $keyword . '%');
}
if (isset($_REQUEST['search'])) {
    $result = search_product($_REQUEST['search']);
    foreach ($result as $rows) {
?>
        <style>
            .hienthia{
                width: 100%;
                text-decoration: none;
                display: flex;
                align-items: center;
                justify-content: space-between;
                height: 100%;

            }
        </style>
        <div class="search_product">
            <div class="hienthi">
                <a class="hienthia" href="chitiet.php?id_product=<?php echo $rows['id_sp'] ?>">
                    <p class="hinh-search"><img src="../../content/img/<?php echo $rows['hinh'] ?>" alt=""></p>
                    <div class="content-search">
                        <p class="ten_sp"><?php echo $rows['ten_san_pham'] ?></p>
                        <p class="gia_sp"><?php echo $rows['gia'] ?></p>

                    </div>
                </a>
            </div>
        </div>
<?php
    }
}
