<?php
// include 'header.php';
include 'database.php';

$db = new Database();
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    header('Location: userlist.php'); exit();
}

// Lấy dữ liệu cũ
$sql = "SELECT * FROM tbl_user WHERE id = $id";
$result = $db->select($sql);
if (!$row = $result ? $result->fetch_assoc() : false) {
    header('Location: userlist.php'); exit();
}

$name = $row['name'];
$address = $row['address'];
$email = $row['email'];
$user = $row['user'];
$password = $row['password'];
$role = $row['role'];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $user_new = trim($_POST['user']);
    $password = trim($_POST['password']);
    $role = intval($_POST['role']);

    // Kiểm tra trùng username (trừ chính user này)
    $check = $db->select("SELECT * FROM tbl_user WHERE user = '" . addslashes($user_new) . "' AND id != $id");
    if ($check && $check->num_rows > 0) {
        $error = 'Tên tài khoản đã tồn tại!';
    } else {
        $sql = "UPDATE tbl_user SET name='$name', address='$address', email='$email', user='$user_new', password='$password', role=$role WHERE id=$id";
        $db->update($sql);
        header('Location: userlist.php');
        exit();
    }
}
?>
<style>
.user-form-container {
    max-width: 480px;
    margin: 48px auto;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    padding: 36px 32px 32px 32px;
}
.user-form-title {
    text-align: center;
    font-size: 1.7rem;
    font-weight: 700;
    margin-bottom: 28px;
    color: #222;
}
.user-form label {
    font-weight: 500;
    margin-bottom: 4px;
    display: block;
}
.user-form input, .user-form select {
    width: 100%;
    padding: 9px 12px;
    border-radius: 6px;
    border: 1px solid #bbb;
    margin-bottom: 16px;
    font-size: 1rem;
}
.user-form button {
    background: #1976d2;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 10px 28px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: background 0.2s;
}
.user-form button:hover { background: #1251a3; }
.user-form .back-link {
    margin-left: 18px;
    color: #1976d2;
    text-decoration: none;
    font-weight: 500;
}
.user-form .back-link:hover { text-decoration: underline; }
.user-form .error {
    color: #d32f2f;
    margin-bottom: 12px;
    text-align: center;
}
</style>
<div class="user-form-container">
    <div class="user-form-title">Sửa thông tin người dùng</div>
    <?php if ($error) echo '<div class="error">'.$error.'</div>'; ?>
    <form method="post" class="user-form">
        <label>Họ tên:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
        <label>Địa chỉ:</label>
        <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <label>Tài khoản:</label>
        <input type="text" name="user" value="<?php echo htmlspecialchars($user); ?>" required>
        <label>Mật khẩu:</label>
        <input type="text" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
        <label>Quyền:</label>
        <select name="role">
            <option value="0" <?php if($role==0) echo 'selected'; ?>>User</option>
            <option value="1" <?php if($role==1) echo 'selected'; ?>>Admin</option>
        </select>
        <button type="submit">Cập nhật</button>
        <a href="userlist.php" class="back-link">Quay lại</a>
    </form>
</div>
<?php include 'footer.php'; ?> 