<?php
include 'session.php';
Session::checkSession();
include "class/brand_class.php";

$brand = new brand();

// Kiểm tra nếu có 'category_id' trong yêu cầu GET
if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
    $category_id = filter_var($_GET['category_id'], FILTER_VALIDATE_INT);

    if ($category_id) {
        // Lấy danh sách thương hiệu theo category_id
        $show_brand_ajax = $brand->show_brand_by_category($category_id);

        if ($show_brand_ajax) {
            while ($result = $show_brand_ajax->fetch_assoc()) {
                echo '<option value="' . $result['brand_id'] . '">' . $result['brand_name'] . '</option>';
            }
        } else {
            echo '<option value="">Không tìm thấy thương hiệu</option>';
        }
    } else {
        echo '<option value="">Dữ liệu không hợp lệ</option>';
    }
} else {
    echo '<option value="">Yêu cầu không hợp lệ</option>';
}
