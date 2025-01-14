<?php
include_once "database.php";
?>

<?php 

    class category {
        private $db;

        public function __construct() {
            $this->db = new Database();
        }
       public function insert_category($category_name){
    // Bảo vệ dữ liệu đầu vào
    $category_name = htmlspecialchars($this->db->link->real_escape_string($category_name));
    
    $query = "INSERT INTO tbl_category (category_name) VALUES ('$category_name')";
    $result = $this->db->insert($query);
    
    if ($result) {
        // Chuyển hướng đến trang thêm danh mục với tham số 'status=success'
        header('Location: categoryadd.php?status=success');
        exit;
    } else {
        echo "Có lỗi khi thêm danh mục.";
    }
}


        public function show_category(){
            $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function get_category($category_id) {
            $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id' ";
            $result = $this->db->select($query);
            return $result;
        }   

        public function update_category($category_name, $category_id){
            $query = "UPDATE tbl_category SET category_name = '$category_name' WHERE category_id = '$category_id'";
            $result = $this->db->update($query);
            header('location:categorylist.php');
            return $result;
        }

        public function delete_category($category_id){
            $query = "DELETE FROM tbl_category WHERE category_id = '$category_id' ";
            $result = $this->db->delete($query);
            header('location:categorylist.php');
            return $result;
        }

    }
?>