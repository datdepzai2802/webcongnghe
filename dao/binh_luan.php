<?php

require_once "pdo.php";

function select_all_comment($id_sp)
{
    $sql = 'select * from binh_luan INNER JOIN tai_khoan on binh_luan.id_account = tai_khoan.id_account WHERE id_sp = ?';
    return pdo_query($sql, $id_sp);
}
function add_comment($content, $id_sp, $id_user)
{
    date_default_timezone_set('ASIA/HO_CHI_MINH');
    $create_at = date('Y-m-d H:i:s');
    $sql = 'insert into binh_luan(noi_dung,thoi_gian_binh_luan,id_sp,id_account)
            values(?,?,?,?)';
    pdo_query($sql, $content, $create_at, $id_sp, $id_user);
}
