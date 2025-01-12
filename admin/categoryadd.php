<?php
    include 'auth.php';
    include "header.php";
    include "slider.php";
    include "class/category_class.php";
?>

<?php
    $category = new category;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $category_name = $_POST['category_name'];
        $insert_category = $category->insert_category($category_name);
    }

    // Kiểm tra trạng thái thành công từ URL
    $status = isset($_GET['status']) ? $_GET['status'] : '';
?>

<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Thêm Danh Mục</h1>
        <form action="" method="POST">
            <input name="category_name" type="text" placeholder="Nhập tên danh mục" required>
            <button class="submit">Thêm</button>
        </form>
    </div>
</div>

<?php if ($status === 'success'): ?>
    <script>
        alert("Danh mục đã được thêm thành công!");
    </script>
<?php endif; ?>

</section>
</body>
</html>
