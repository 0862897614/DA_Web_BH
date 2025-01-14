<?php
include 'header.php';
include 'class/product_class.php';

$product = new product;

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $delete_result = $product->delete_product($product_id);

    if ($delete_result) {
        header('Location: productlist.php');
        exit;
    } else {
        echo "Có lỗi xảy ra khi xóa sản phẩm.";
    }
}
