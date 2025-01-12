<?php

include 'session.php';
Session::checkSession();
include "class/product_class.php";
$product = new product;

// Kiểm tra xem 'category_id' có tồn tại trong tham số URL hay không
if (isset($_GET["category_id"])) {
    $category_id = $_GET["category_id"];

    // Giả sử bạn có phương thức show_brand_ajax để xử lý
    $show_brand_ajax = $product->show_brand_ajax($category_id);
    if ($show_brand_ajax) {
        while ($result = $show_brand_ajax->fetch_assoc()) {
?>
            <option value="<?php echo $result['brand_id']; ?>">
                <?php echo $result['brand_name']; ?>
            </option>
<?php
        }
    }
} else {
    // Nếu category_id không có, bạn có thể hiển thị lỗi hoặc xử lý thích hợp
    echo "Lỗi: category_id chưa được cung cấp.";
}
?>