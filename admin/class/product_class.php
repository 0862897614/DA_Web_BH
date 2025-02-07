<?php
include_once "database.php";
?>

<?php

class product
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show_category()
    {
        $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_brand()
    {
        $query = "SELECT tbl_brand.brand_id, tbl_brand.brand_name, tbl_category.category_name
                      FROM tbl_brand
                      INNER JOIN tbl_category ON tbl_brand.category_id = tbl_category.category_id
                      ORDER BY tbl_brand.brand_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function show_brand_ajax($category_id)
    {
        $query = "SELECT * FROM tbl_brand WHERE category_id = '$category_id' ";
        $result = $this->db->select($query);
        return $result;
    }

    

    public function insert_product()
    {
        // Xử lý và bảo vệ dữ liệu đầu vào
        $product_name = htmlspecialchars($this->db->link->real_escape_string($_POST['product_name']));
        $category_id = (int) $_POST['category_id'];  // Lọc dữ liệu đầu vào
        $brand_id = (int) $_POST['brand_id'];        // Lọc dữ liệu đầu vào
        $product_price = (float) $_POST['product_price']; // Chuyển đổi giá trị sang kiểu float
        $product_price_new = (float) $_POST['product_price_new']; // Chuyển đổi giá trị sang kiểu float
        $product_desc = htmlspecialchars($this->db->link->real_escape_string($_POST['product_desc']));
        $product_img = $_FILES['product_img']['name'];

        // Kiểm tra ảnh được tải lên
        if (!empty($product_img)) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($product_img);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Kiểm tra loại ảnh
            $allowed_types = ['jpg', 'png', 'jpeg', 'gif','webp'];
            if (in_array($imageFileType, $allowed_types)) {
                // Kiểm tra và tải ảnh lên
                if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file)) {
                    // Sử dụng Prepared Statements để tránh SQL Injection
                    $stmt = $this->db->link->prepare("INSERT INTO tbl_product
                            (product_name, category_id, brand_id, product_price, product_price_new, product_desc, product_img)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("siidsss", $product_name, $category_id, $brand_id, $product_price, $product_price_new, $product_desc, $product_img);
                    $result = $stmt->execute();
                    if ($result) {
                        // Lấy product_id của sản phẩm vừa được thêm
                        $product_id = $this->db->link->insert_id;
                        $filename = $_FILES['product_img_desc']['name'];
                        $filetmp = $_FILES['product_img_desc']['tmp_name'];


                        foreach ($filename as $key => $value) {
                            move_uploaded_file($filetmp[$key], "uploads/" . $value);
                            $query = "INSERT INTO tbl_product_img_desc (product_id, product_img_desc) VALUES ('$product_id', '$value')";
                            $this->db->insert($query);
                        }

                        // Chuyển hướng đến trang danh sách sản phẩm với thông báo thành công
                        header('Location: productadd.php?status=success');
                        exit;
                    } else {
                        echo "Lỗi khi thêm sản phẩm vào cơ sở dữ liệu.";
                    }
                } else {
                    echo "Có lỗi khi tải ảnh lên.";
                }
            } else {
                echo "Chỉ hỗ trợ các định dạng ảnh JPG, PNG, WEBP, JPEG và GIF.";
            }
        } else {
            echo "Vui lòng chọn ảnh sản phẩm.";
        }
    }


    public function show_product()
    {
        $query = "SELECT tbl_product.product_id, tbl_product.product_name, tbl_category.category_name, 
                     tbl_brand.brand_name, tbl_product.product_price, tbl_product.product_price_new, tbl_product.product_img
              FROM tbl_product
              INNER JOIN tbl_category ON tbl_product.category_id = tbl_category.category_id
              INNER JOIN tbl_brand ON tbl_product.brand_id = tbl_brand.brand_id
              ORDER BY tbl_product.product_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function get_product($product_id)
    {
        $query = "SELECT tbl_product.product_id, tbl_product.product_name, tbl_product.category_id, tbl_product.brand_id, 
                     tbl_product.product_price, tbl_product.product_price_new, tbl_product.product_desc, tbl_product.product_img
              FROM tbl_product
              WHERE tbl_product.product_id = '$product_id'";
        $result = $this->db->select($query);
        return $result ? $result->fetch_assoc() : null; // Trả về dữ liệu sản phẩm hoặc null nếu không có kết quả
    }

    public function update_product($product_id, $product_name, $category_id, $brand_id, $product_price, $product_price_new, $product_desc, $product_img)
    {
        $product_name = htmlspecialchars($this->db->link->real_escape_string($product_name));
        $category_id = (int)$category_id;
        $brand_id = (int)$brand_id;
        $product_price = (float)$product_price;
        $product_price_new = (float)$product_price_new;
        $product_desc = htmlspecialchars($this->db->link->real_escape_string($product_desc));
        $product_img = htmlspecialchars($this->db->link->real_escape_string($product_img));

        // Câu lệnh SQL cập nhật
        $query = "UPDATE tbl_product SET 
                product_name = '$product_name',
                category_id = '$category_id', 
                brand_id = '$brand_id', 
                product_price = '$product_price', 
                product_price_new = '$product_price_new', 
                product_desc = '$product_desc', 
                product_img = '$product_img' 
              WHERE product_id = '$product_id'";

        $result = $this->db->update($query);
        return $result;
    }


    public function delete_product($product_id)
    {
        $query = "DELETE FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this->db->delete($query);
        return $result;
    }

}
?>











