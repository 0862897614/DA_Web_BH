<?php
// Thiết lập thông tin kết nối
$host = 'localhost';
$username = 'root'; // Username MySQL
$password = ''; // Mật khẩu MySQL (để trống nếu không có)
$database = 'website_bh'; // Tên cơ sở dữ liệu

// Kết nối tới MySQL
$link_prd = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$link_prd) {
    die('Kết nối cơ sở dữ liệu thất bại: ' . mysqli_connect_error());
}

// Truy vấn dữ liệu từ cơ sở dữ liệu
$query = "SELECT * FROM products"; // Tùy chỉnh theo truy vấn của bạn
$listdb = mysqli_query($link_prd, $query);

// Kiểm tra kết quả truy vấn
if (!$listdb) {
    die('Truy vấn thất bại: ' . mysqli_error($link_prd));
}

// Hiển thị dữ liệu (ví dụ)
while ($row = mysqli_fetch_assoc($listdb)) {
    echo '<div class="product">';
    echo '<img src="../uploads/' . $row['image_url'] . '" alt="' . $row['product_name'] . '">';
    echo '<h3>' . $row['product_name'] . '</h3>';
    echo '<span>' . $row['price'] . 'đ</span>';
    echo '</div>';
}

// Đóng kết nối
mysqli_close($link_prd);
?>
