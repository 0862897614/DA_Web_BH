<?php
    include "header.php";
    include "slider.php";
    include "class/brand_class.php";
?>


<?php
    $brand = new brand;
    $brand_id = $_GET['brand_id'];
    $get_brand = $brand -> get_brand($brand_id);
    if($get_brand) {
        $result = $get_brand -> fetch_assoc();
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $brand_name = $_POST['brand_name'];
    $update_brand = $brand->update_brand($category_id, $brand_name, $brand_id);
}

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
                <h1>Cập Nhật Loại Sản Phẩm</h1> <br>
                <form style="margin-top:-7px;" action="" method="POST">
                <select name="category_id" id="">
                    <option value="#">-- Chọn Danh mục --</option>
                    <?php
                    $show_category = $brand ->show_category();
                    if ($show_category) {
                        while($rusult = $show_category -> fetch_assoc()) {
                    ?>
                    <option <?php if($result['category_id'] == $rusult['category_id']) {
                        echo "SELECTED";
                    } ?> value="<?php echo $rusult['category_id'] ?>"><?php echo $rusult['category_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>  <br>
                    <input name="brand_name"  type="text" placeholder="Nhập tên loại sản phẩm" value="<?php echo $result['brand_name'] ?>" required>
                    <button class="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>