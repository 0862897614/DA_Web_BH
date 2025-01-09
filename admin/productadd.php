<?php
    include "header.php";
    include "slider.php";
    include "class/product_class.php";
?>

<?php
    $product = new product;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // echo'<pre>';
        // echo print_r($_FILES['product_img_desc']['name']);
        // echo '</pre>';
        $insert_product = $product->insert_product();
    }

    // Kiểm tra trạng thái thành công
    $status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_add">
        <h1>Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
            <input type="text" name="product_name" required>
            <label for="">Chọn danh mục<span style="color: red;">*</span></label>
            <select name="category_id" id="">
                <option value="#">--Chọn--</option>
                <?php 
                $show_category = $product->show_category();
                if ($show_category) {
                    while ($result = $show_category->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $result['category_id']; ?>">
                            <?php echo $result['category_name']; ?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
            <label for="">Chọn loại sản phẩm<span style="color: red;">*</span></label>
            <select name="brand_id" id="">
                <option value="#">--Chọn--</option>
                <?php 
                $show_brand = $product->show_brand();
                if ($show_brand) {
                    while ($result = $show_brand->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $result['brand_id']; ?>">
                            <?php echo $result['brand_name']; ?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
            <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
            <input name="product_price" type="text" required>
            <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
            <input name="product_price_new" type="text" required>
            <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
            <textarea name="product_desc" id="editor1" cols="30" rows="10" required></textarea>
            <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
            <input type="file" name="product_img" id="" required>
            <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
            <input multiple type="file" name="product_img_desc[]" id="">
            <button class="submit">Thêm</button>
        </form>
    </div>
</div>

<?php if ($status === 'success'): ?>
    <script>
        alert("Sản phẩm đã được thêm thành công!");
    </script>
<?php endif; ?>

</section>
</body>

   <script>
  CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
  });
</script>

</html>
