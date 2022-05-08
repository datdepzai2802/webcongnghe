<?php
require_once "pdo.php";
function slider_selectall(){
    $sql= "SELECT * FROM slider";
    return pdo_query($sql);
}
