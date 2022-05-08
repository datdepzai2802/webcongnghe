<?php

require_once "pdo.php";

function show_order()
{
    $sql = "select * from don_hang";
    return pdo_query($sql);
}
