<?php
    include 'auth.php';
    include "header.php";
    include "slider.php";
    include "class/brand_class.php";
?>


<?php
    $brand = new brand;
    $show_brand = $brand->show_brand();
?>

<div class="admin-content-right">
    <div class="admin-content-right-category_list">
        <h1>Danh sách danh mục</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã Sản Phẩm</th>
                <th>Danh Mục</th>
                <th>Loại Sản Phẩm</th>
                <th>Thao Tác</th>
            </tr>
            <?php
                if($show_brand) {$i=0;
                    while( $result = $show_brand->fetch_assoc()){$i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['brand_id'] ?></td>
                <td><?php echo $result['category_name'] ?></td>
                <td><?php echo $result['brand_name'] ?></td>
                <td>
                    <a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a> |
                    <a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');">
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