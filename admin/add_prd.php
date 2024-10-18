
<?php
// Kiểm tra sự tồn tại của file connect.php
if (file_exists("../config/connect.php")) {
    include("../config/connect.php");
} else {
    die("Không thể tìm thấy file kết nối.");
}

// Khởi tạo biến thông báo
$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $product_id = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];

    if (isset($_POST['size'])) {
        $size = $_POST['size'];
        var_dump($size); // Kiểm tra giá trị của size
    } else {
        $size = [];
    }

    $size1 = implode(",", $size); 

    $colors = htmlspecialchars($_POST['colors']);
    $stock = intval($_POST['stock']);
    $description = htmlspecialchars($_POST['description']);
    $newBadge = isset($_POST['new_badge']) ? 1 : 0;

    // Xử lý tải lên hình ảnh
    $image_url = basename($_FILES['image_url']['name']);
    $targetDir = __DIR__ . "/../uploads/"; // Sử dụng đường dẫn tuyệt đối
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true); // Tạo thư mục nếu không tồn tại
    }
    $targetFile = $targetDir . $image_url;
    $uploadOk = 1; // Thay đổi giá trị mặc định của $uploadOk
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Kiểm tra xem hình ảnh có phải là hình ảnh thật hay không
    $check = getimagesize($_FILES['image_url']['tmp_name']);
    if ($check === false) {
        $errorMessage = "File không phải là hình ảnh.";
        $uploadOk = 0;
    }

    // Kiểm tra kích thước hình ảnh
    if ($_FILES['image_url']['size'] > 500000) {
        $errorMessage = "Xin lỗi, hình ảnh quá lớn.";
        $uploadOk = 0;
    }

    // Chỉ cho phép các định dạng hình ảnh cụ thể
    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif', 'webp'])) {
        $errorMessage = "Xin lỗi, chỉ cho phép định dạng JPG, JPEG, PNG, GIF & WEBP.";
        $uploadOk = 0;
    }

    // Kiểm tra nếu $uploadOk = 0, thì hình ảnh không được tải lên
    if ($uploadOk == 0) {
        $errorMessage = "Xin lỗi, hình ảnh không được tải lên.";
    } else {
        // Nếu tất cả đều ổn, hãy cố gắng tải hình ảnh lên
        if (!move_uploaded_file($_FILES['image_url']['tmp_name'], $targetFile)) {
            $errorMessage = "Xin lỗi, có lỗi khi tải hình ảnh lên.";
        }
    }

    if (empty($errorMessage)) {
        // Câu lệnh SQL để thêm sản phẩm
        $sql = "INSERT INTO products (product_id, product_name, category, price, availability, size, colors, stock, description, new_badge, image_url) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdisisssis", $product_id, $productName, $category, $price, $availability, $size1, $colors, $stock, $description, $newBadge, $image_url);

        if ($stmt->execute()) {
            $successMessage = "Thêm sản phẩm thành công!";
        } else {
            $errorMessage = "Có lỗi xảy ra: " . $stmt->error;
        }

        // Đóng kết nối
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .upload-label {
            margin: 10px 0;
            display: block;
        }
        .size-options {
            display: flex;
            justify-content: space-between;
        }
        .size-options label {
            margin: 5px;
        }
        .message-box {
            display: <?php echo !empty($successMessage) || !empty($errorMessage) ? 'block' : 'none'; ?>;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            text-align: center;
        }
        .overlay {
            display: <?php echo !empty($successMessage) || !empty($errorMessage) ? 'block' : 'none'; ?>;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Thêm Sản Phẩm</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="product_id" placeholder="Mã sản phẩm" required>
            <input type="text" name="product_name" placeholder="Tên sản phẩm" required>
            <input type="text" name="category" placeholder="Danh mục" required>
            <input type="number" name="price" placeholder="Giá" required>
            <select name="availability" required>
                <option value="1">Còn hàng</option>
                <option value="0">Hết hàng</option>
            </select>
            <div class="size-options">
                <label><input type="checkbox" name="size[]" value="S" checked> S</label>
                <label><input type="checkbox" name="size[]" value="M"> M</label>
                <label><input type="checkbox" name="size[]" value="L"> L</label>
                <label><input type="checkbox" name="size[]" value="XL"> XL</label>
                <label><input type="checkbox" name="size[]" value="XXL"> XXL</label>
            </div>
            <input type="text" name="colors" placeholder="Màu sắc (phân cách bằng dấu phẩy)" required>
            <input type="number" name="stock" placeholder="Tồn kho" required>
            <textarea name="description" placeholder="Mô tả sản phẩm" required></textarea>
            <label>
                <input type="checkbox" name="new_badge"> Sản phẩm mới
            </label>
            <label class="upload-label">Tải lên hình ảnh:</label>
            <input type="file" name="image_url" accept=".jpg, .jpeg, .png, .gif, .webp" required>
            <input type="submit" value="Thêm sản phẩm">
        </form>
    </div>

    <!-- Hộp thông báo -->
    <div id="overlay" class="overlay">
        <div class="message-box">
            <p><?php echo !empty($successMessage) ? $successMessage : $errorMessage; ?></p>
            <button onclick="document.getElementById('overlay').style.display='none';">Đóng</button>
             </div>
    </div>

    <script>
        // Tự động ẩn thông báo sau 5 giây (nếu muốn)
        setTimeout(function() {
            document.getElementById('overlay').style.display = 'none';
        }, 5000);
    </script>
</body>
</html>
