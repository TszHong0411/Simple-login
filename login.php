<?php
$username = "admin";
$password = "admin";

if ($_POST['username'] == $username && $_POST['password'] == $password ) {
    echo "Sign in suceesfully";
} else {
    echo "Login failed. Redirect back to homepage after 3 seconds";
    header( "refresh:3;url=https://tszhong-login.avosapps.us/" );
}
?>