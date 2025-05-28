<?php
include 'header.php';
include 'database.php';

$db = new Database();

// Xử lý tìm kiếm
$search_id = isset($_GET['search_id']) ? intval($_GET['search_id']) : '';
$where = '';
if ($search_id !== '') {
    $where = "WHERE id = $search_id";
}
$sql = "SELECT * FROM tbl_user $where ORDER BY id ASC";
$result = $db->select($sql);
?>
<style>
.user-container {
    max-width: 1100px;
    margin: 40px auto;
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    padding: 36px 32px 32px 32px;
    position: relative;
}
.user-exit {
    position: absolute;
    top: 18px;
    right: 22px;
    color:rgb(160, 160, 160);
    font-size: 1rem;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.2s;
    z-index: 10;
}
.user-exit:hover {
    color:rgb(65, 64, 64);
}


.user-title {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 50px;
    letter-spacing: 1px;
    color: #222;
}
.user-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
    flex-wrap: wrap;
    gap: 10px;
}
.user-actions form {
    display: flex;
    gap: 10px;
}
.user-actions input[type="number"] {
    padding: 8px 14px;
    border-radius: 6px;
    border: 1px solid #bbb;
    font-size: 1rem;
}

.user-actions button, .user-actions a.add-btn {
    background: #1976d2;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 8px 22px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s;
    text-decoration: none;
    display: inline-block;
}
.user-actions a.add-btn {
    background: #43a047;
    margin-left: 10px;
}
.user-actions button:hover { background: #1251a3; }
.user-actions a.add-btn:hover { background: #2e7031; }

.user-table {
    width: 100%;
    border-collapse: collapse;
    background: #fafbfc;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 8px #eee;
}
.user-table th, .user-table td {
    padding: 12px 10px;
    text-align: center;
    border-bottom: 1px solid #e0e0e0;
}
.user-table th {
    background: #f5f7fa;
    font-weight: 700;
    color: #333;
    font-size: 1.05rem;
}
.user-table tr:last-child td {
    border-bottom: none;
}
.user-table td {
    font-size: 1rem;
    color: #222;
}
.user-table a.edit {
    color: #1976d2;
    font-weight: 500;
    text-decoration: none;
    margin-right: 8px;
}
.user-table a.delete {
    color: #d32f2f;
    font-weight: 500;
    text-decoration: none;
}
.user-table a.edit:hover { text-decoration: underline; }
.user-table a.delete:hover { text-decoration: underline; }
@media (max-width: 900px) {
    .user-container { padding: 16px 4px; }
    .user-table th, .user-table td { padding: 8px 4px; font-size: 0.95rem; }
}


</style>
<div class="user-container">
    <a href="index.php" class="user-exit" title="Quay về trang chính">&#10005;</a>
    <div class="user-title">QUẢN LÝ NGƯỜI DÙNG</div>
    <div class="user-actions">
        <form method="get">
            <input type="number" name="search_id" placeholder="Tìm kiếm theo ID" value="<?php echo htmlspecialchars($search_id); ?>">
            <button type="submit">Tìm kiếm</button>
        </form>
        <a href="useradd.php" class="add-btn">+ Thêm người dùng</a>
    </div>
    <table class="user-table">
        <tr>
            <th>STT</th>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Tài khoản</th>
            <th>Quyền</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $i = 1;
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $i++ . '</td>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . htmlspecialchars($row['name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['address']) . '</td>';
                echo '<td>' . htmlspecialchars($row['email']) . '</td>';
                echo '<td>' . htmlspecialchars($row['user']) . '</td>';
                echo '<td>' . ($row['role'] == 1 ? 'Admin' : 'User') . '</td>';
                echo '<td>';
                echo '<a href="useredit.php?id=' . $row['id'] . '" class="edit">Sửa</a>';
                echo '<a href="userdelete.php?id=' . $row['id'] . '" class="delete" onclick="return confirm(\'Bạn có chắc muốn xóa?\')">Xóa</a>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>

</div>
<?php include 'footer.php'; ?> 