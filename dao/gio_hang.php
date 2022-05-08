<?php
require_once "pdo.php";

function select_product_in_cart($id_product, $id_account)
{
    $sql = "select * from gio_hang where id_sp = ? and id_account = ?";
    return pdo_query_one($sql, $id_product, $id_account);
}

function add_to_cart($ten_sp, $hinh, $gia, $so_luong, $id_sp, $id_account)
{
    $result = '';
    $sql_add = 'insert into gio_hang(ten_sp,hinh,gia,so_luong,id_sp,id_account)
    values(?,?,?,?,?,?)';
    pdo_execute($sql_add, $ten_sp, $hinh, $gia, $so_luong, $id_sp, $id_account);
}
function update_cart_in_cart($quantity, $id_sp, $id_user)
{
    $sql = "update gio_hang set so_luong = ? where id_sp = ? and id_account = ?";
    pdo_execute($sql, $quantity, $id_sp, $id_user);
}

function order_select_by_user($id_user)
{
    $sql = "SELECT * FROM gio_hang where id_account = ?";
    return pdo_query($sql, $id_user);
}

function delete_product_in_cart($id_order)
{
    $sql = 'delete from gio_hang where id_gio_hang = ?';
    pdo_execute($sql, $id_order);
}

function update_cart($quantity, $id_cart)
{
    $sql = "update gio_hang set so_luong = ? where id_gio_hang = ?";
    pdo_execute($sql, $quantity, $id_cart);
}

function select_cart($id_cart)
{
    $sql = 'select * from gio_hang where id_gio_hang = ?';
    return pdo_query_one($sql, $id_cart);
}

function add_order($name_user, $email, $phone, $total, $status, $address, $time, $id_account)
{
    $sql = "insert into don_hang(ten_nguoi_mua,email,sdt_nguoi_mua,thanhtien,status,dia_chi_nhan_hang,thoi_gian_dat_hang,id_account)
           values(?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$name_user, $email, $phone, $total, $status, $address, $time, $id_account);
    $result = pdo_query_one('SELECT id_don_hang FROM don_hang ORDER BY id_don_hang DESC LIMIT 1');
    return  $result['id_don_hang'];
}

function detail_order($id_sp, $soluong, $gia, $ten_sp, $id_don_hang)
{
    $sql = "insert into chi_tiet_don(id_sp, so_luong, gia, ten_san_pham, id_don_hang)
             values(?,?,?,?,?)";
    pdo_execute($sql, $id_sp, $soluong, $gia, $ten_sp, $id_don_hang);
}

if (isset($_REQUEST['quantity'])) {
    echo $_REQUEST['id_cart'], $_REQUEST['quantity'];

    update_cart($_REQUEST['quantity'], $_REQUEST['id_cart']);
}

if (isset($_REQUEST['order'])) {
    date_default_timezone_set('ASIA/HO_CHI_MINH');
    $create_at = date('Y-m-d H:i:s');
    $result = add_order($_REQUEST['order']['name'], $_REQUEST['order']['email'], $_REQUEST['order']['phone'], $_REQUEST['order']['money'], 0, $_REQUEST['order']['address'], $create_at, $_REQUEST['order']['id_user']);
    extract($_REQUEST);
    $list_id_sp = json_decode($list_id_sp);
    $list_gia = json_decode($list_gia);
    $list_so_luong = json_decode($list_so_luong);
    $list_ten_sp = json_decode($list_ten_sp);
    
    for ($i = 0; $i < sizeof($list_gia); $i++) {
        detail_order($list_id_sp[$i], $list_so_luong[$i], $list_gia[$i], $list_ten_sp[$i], $result);
    }
}
