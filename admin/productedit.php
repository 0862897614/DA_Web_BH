<?php
include 'auth.php';
include "header.php";
include "slider.php";
include "class/product_class.php";
include "class/category_class.php";
include "class/brand_class.php";

$product = new product;
$category = new category;
$brand = new brand;

// Kiểm tra nếu có product_id trong URL
if (!isset($_GET['product_id']) || $_GET['product_id'] == NULL) {
    echo "<script>window.location = 'productlist.php';</script>";
} else {
    $product_id = $_GET['product_id'];
}

// Lấy thông tin sản phẩm
$get_product = $product->get_product($product_id);
if ($get_product) {
    $result = $get_product; // Kết quả đã là mảng
} else {
    echo "Không tìm thấy sản phẩm!";
    exit;
}

?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $category_id = filter_var($_POST['category_id'], FILTER_VALIDATE_INT);
    $brand_id = filter_var($_POST['brand_id'], FILTER_VALIDATE_INT);
    $product_price = filter_var($_POST['product_price'], FILTER_VALIDATE_FLOAT);
    $product_price_new = filter_var($_POST['product_price_new'], FILTER_VALIDATE_FLOAT);
    $product_desc = $_POST['product_desc'];

    // Kiểm tra đầu vào hợp lệ
    if (!$category_id || !$brand_id || !$product_price || !$product_price_new) {
        echo "Dữ liệu không hợp lệ!";
        exit;
    }

    // Kiểm tra file ảnh
    if (!empty($_FILES['product_img']['name'])) {
        $upload_dir = "uploads/";
        $product_img = basename($_FILES['product_img']['name']);
        $target_file = $upload_dir . $product_img;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'png', 'jpeg', 'gif', 'webp'];

        if (in_array($imageFileType, $allowed_types)) {
            if (!move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file)) {
                echo "Lỗi khi tải ảnh!";
                exit;
            }
        } else {
            echo "Định dạng ảnh không hợp lệ! Chỉ chấp nhận jpg, png, jpeg, gif, và webp.";
            exit;
        }
    } else {
        // Nếu không có ảnh mới, giữ lại ảnh hiện tại
        $product_img = $result['product_img'];
    }

    // Cập nhật sản phẩm
    $update_product = $product->update_product(
        $product_id,
        $product_name,
        $category_id,
        $brand_id,
        $product_price,
        $product_price_new,
        $product_desc,
        $product_img
    );

    if ($update_product) {
        header("Location: productlist.php");
        exit;
    } else {
        echo "Lỗi khi cập nhật sản phẩm!";
    }
}


?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1 style="margin-bottom: 20px">Cập Nhật Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input name="product_name" type="text" placeholder="Nhập tên sản phẩm" value="<?php echo $result['product_name']; ?>" required>

            <label for="category_id">Danh mục sản phẩm:</label>
            <select name="category_id" id="category_id" required>
                <?php
                $categories = $category->show_category();
                foreach ($categories as $category_item) {
                    echo '<option value="' . $category_item['category_id'] . '" ' . ($category_item['category_id'] == $result['category_id'] ? 'selected' : '') . '>' . $category_item['category_name'] . '</option>';
                }
                ?>
            </select>

            <label for="brand_id">Thương hiệu sản phẩm:</label>
            <select name="brand_id" id="brand_id" required>
            </select>

            <label for="">Nhập giá sản phẩm:</label>
            <input name="product_price" type="number" placeholder="Nhập giá sản phẩm" value="<?php echo $result['product_price']; ?>" required>
            <label for="">Nhập giá khuyến mãi:</label>
            <input name="product_price_new" type="number" placeholder="Nhập giá khuyến mãi" value="<?php echo $result['product_price_new']; ?>" required>
            <label for="">Mô tả sản phẩm:</label>
            <textarea name="product_desc" placeholder="Mô tả sản phẩm" required><?php echo $result['product_desc']; ?></textarea>

            <label for="product_img">Ảnh sản phẩm:</label>
            <input type="file" name="product_img" id="product_img">

            <!-- Hiển thị ảnh hiện tại nếu có -->
            <div>
                <img src="uploads/<?php echo $result['product_img']; ?>" alt="Current Product Image" width="100">
            </div>

            <button class="submit">Cập nhật</button>
        </form>
    </div>
</div>
</section>


</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var categoryId = document.getElementById("category_id").value; // Lấy danh mục hiện tại
        var brandSelect = document.getElementById("brand_id");

        // Gửi yêu cầu AJAX để lấy danh sách thương hiệu
        fetch("productadd_ajax.php?action=get_brands&category_id=" + categoryId)
            .then(response => response.text())
            .then(data => {
                // Cập nhật danh sách thương hiệu
                brandSelect.innerHTML = data;
            })
            .catch(error => {
                console.error("Lỗi:", error);
                brandSelect.innerHTML = '<option value="">Lỗi khi tải thương hiệu</option>';
            });
    });
</script>

</html>