<?php
include 'config.php';
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $db = new Database();

    // Kiểm tra tên đăng nhập
    $checkUser = "SELECT * FROM tbl_user WHERE user = '$user'";
    $userResult = $db->select($checkUser);

    // Kiểm tra email
    $checkEmail = "SELECT * FROM tbl_user WHERE email = '$email'";
    $emailResult = $db->select($checkEmail);

    if ($userResult) {
        $error = "Tên người dùng đã tồn tại! Vui lòng chọn tên khác!";
    } elseif ($emailResult) {
        $error = "Email đã tồn tại! Vui lòng chọn email khác!";
    } else {
        // Nếu cả tên đăng nhập và email chưa tồn tại, thực hiện chèn dữ liệu
        $query = "INSERT INTO tbl_user (name, address, email, user, password, role) 
                  VALUES ('$name', '$address', '$email', '$user', '$pass', 0)";
        $insert = $db->insert($query);

        if ($insert) {
            echo "<script>
                    alert('Đăng ký thành công!');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            $error = "Đăng ký thất bại!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="register-container">
        <h2>Đăng Ký</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" action="">
            <label for="name">Họ và Tên:</label>
            <input type="text" name="name" id="name" required>
            <label for="address">Địa chỉ:</label>
            <input type="text" name="address" id="address" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" name="register">Đăng Ký</button>
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
        </form>
    </div>
</body>

</html>