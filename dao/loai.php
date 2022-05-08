<?php
require_once "pdo.php";
function loai_selectall(){
    $sql= "SELECT * FROM loai_hang";
    return pdo_query($sql);
}
