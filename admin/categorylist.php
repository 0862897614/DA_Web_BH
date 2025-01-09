<?php
    include "header.php";
    include "slider.php";
    include "class/category_class.php";
?>


<?php
    $category = new category;
    $show_category = $category ->show_category();
?>

<div class="admin-content-right">
    <div class="admin-content-right-category_list">
        <h1>Danh sách danh mục</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã Danh Mục</th>
                <th>Danh Mục</th>
                <th>Thao Tác</th>
            </tr>
            <?php
                if($show_category) {$i=0;
                    while( $result = $show_category->fetch_assoc()){$i++;
                ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['category_id'] ?></td>
                <td><?php echo $result['category_name'] ?></td>
                <td>
                    <a href="categoryedit.php?category_id=<?php echo $result['category_id'] ?>">Sửa</a> |
                    <a href="categorydelete.php?category_id=<?php echo $result['category_id'] ?>"
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