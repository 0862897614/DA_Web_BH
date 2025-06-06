<?php
// config/connect.php

$host = 'localhost'; // Địa chỉ máy chủ MySQL
$username = 'root'; // Tên đăng nhập MySQL
$password = ''; // Mật khẩu MySQL (để trống nếu không có)
$database = 'website_bh'; // Thay thế bằng tên cơ sở dữ liệu của bạn

// Kết nối tới MySQL
$link_prd = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$link_prd) {
    die('Kết nối cơ sở dữ liệu thất bại: ' . mysqli_connect_error());
}
?>

