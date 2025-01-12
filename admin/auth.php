<?php
// Chỉ gọi checkSession() khi người dùng đã đăng nhập và đang vào các trang cần quyền admin
if ($_SERVER['PHP_SELF'] !== 'login.php') {
    include 'session.php';
    Session::checkSession();
}
