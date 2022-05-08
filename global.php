<?php
session_start();
$ROOT_URL = "/duan1";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
$UPLOAD_URL = "../../upload/";

//kiểm tra sự tồn tại
function exit_agram($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
//biến toàn cục chia sẻ giữa controller và view
$VIEW = "index.php";
$MESSAGE = "";
//upload file
function upload_file($fieldname, $target_dir)
{
    $file_upload =  $_FILES[$fieldname];
    $file_name = basename($file_upload['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $target_path);
    return $file_name;
}
//check login
function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['username'])) {
        if ($_SESSION['username']['vai_tro'] == 1) {
            header('location:../admin/index.php');
        } else if($_SESSION['username']['vai_tro'] == 0) {
            header('location:$SITE_URL/trang-chinh/index.php');
        }
        else{
            header('location:$SITE_URL/trang-chinh/dangnhap.php');
        }

    }
    
}




if (isset($_REQUEST['add_to_cart'])) {
    if (isset($_SESSION['user'])) {
    } else {
        header('location:dangnhap.php');
    }
}
