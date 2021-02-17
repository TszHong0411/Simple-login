<?php
$username = "admin";
$password = "admin";

if ($_POST['username'] == $username && $_POST['password'] == $password ) {
    echo "登入成功";
} else {
    echo "登入失敗";
    header( "refresh:3;url=https://tszhong-api.avosapps.us/" );
}
?>