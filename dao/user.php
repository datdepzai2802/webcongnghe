<?php
require_once "pdo.php";

function register($name, $phone, $email, $pass)
{
    $sql = "insert into tai_khoan(username,pass,mail,avatar,sdt,vaitro)
            values(?,?,?,'user.png',?,'0')";
    pdo_execute($sql, $name, $pass, $email, $phone);
}
function login($username, $pass)
{
    $sql = "select * from tai_khoan where username= ? and pass = ?";
    return pdo_query_one($sql, $username, $pass);
}

function change_pass($newpass, $id_user)
{
    $sql  = "update tai_khoan set pass = ? where id_account =?";
    pdo_execute($sql, $newpass, $id_user);
}
