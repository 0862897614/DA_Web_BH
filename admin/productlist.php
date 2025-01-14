<?php
include 'auth.php';
include 'header.php';
include 'slider.php';
include 'class/product_class.php';
?>

<?php
$product = new product;
$show_product = $product->show_product();
?>

<div class="admin-content-right">
    <div class="admin-content-right-product_list">
        <h1>Danh sách sản phẩm</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Loại sản phẩm</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Ảnh sản phẩm</th>
                <th>Thao tác</th>
            </tr>
            <?php
            if ($show_product) {
                $i = 0;
                while ($result = $show_product->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['product_name']; ?></td>
                        <td><?php echo $result['category_name']; ?></td>
                        <td><?php echo $result['brand_name']; ?></td>
                        <td><?php echo number_format($result['product_price'], 0, ',', '.'); ?>đ</td>
                        <td><?php echo number_format($result['product_price_new'], 0, ',', '.'); ?>đ</td>
                        <td><img src="uploads/<?php echo $result['product_img']; ?>" alt="product image" style="width: 100px; height: auto;"></td>
                        <td>
                            <a href="productedit.php?product_id=<?php echo $result['product_id']; ?>">Sửa</a> |
                            <a href="productdelete.php?product_id=<?php echo $result['product_id']; ?>"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');">
                                Xóa
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <a href="index.php"
            style="margin: 20px;
                background-color: #007BFF;
                display: inline-block;
                padding: 4px 15px;
                border-radius: 2px;
                float:right;
                color:white;
            ">
            <i class="fa-solid fa-arrow-left" style="color: white; font-size:18px;"></i>
        </a>
    </div>
</div>
</section>

</body>

</html>