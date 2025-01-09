<?php
    include "header.php";
    include "slider.php";
    include "class/brand_class.php";
?>


<?php
    $brand = new brand;
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $category_id = $_POST['category_id'];
        $brand_name = $_POST['brand_name'];
        $insert_brand = $brand ->insert_brand($category_id,$brand_name);
    }
   
        // Kiểm tra trạng thái thành công từ URL
    $status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<style>
    select {
        height: 30px;
        width: 200px;
    }
    option {
        margin-left: 20px;
    }
</style>



<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Thêm Loại Sản Phẩm</h1> <br>
                <form style="margin-top:-7px;" action="" method="POST">
                <select name="category_id" id="">
                    <option value="#">-- Chọn Danh mục --</option>
                    <?php
                    $show_category = $brand ->show_category();
                    if ($show_category) {
                        while($rusult = $show_category -> fetch_assoc()) {
                    ?>
                    <option value="<?php echo $rusult['category_id'] ?>"><?php echo $rusult['category_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>  <br>
                    <input name="brand_name"  type="text" placeholder="Nhập tên loại sản phẩm" required>
                    <button class="submit">Thêm</button>
                </form>
            </div>
        </div>

<?php if ($status === 'success'): ?>
    <script>
        alert("Loại sản phẩm đã được thêm thành công!");
    </script>
<?php endif; ?>

    </section>
    
</body>
</html>