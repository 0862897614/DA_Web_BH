<?php
    include 'config.php';
    include "database.php";
    include 'session.php';
    Session::checkLogin(); 

    Session::checkLogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        $db = new Database();
        $query = "SELECT * FROM tbl_user WHERE user='$user' AND password='$pass'";
        $result = $db->select($query);
        
        if ($result) {
            $data = $result->fetch_assoc();
            Session::set('login', true);
            Session::set('username', $data['user']);
            Session::set('role', $data['role']);
            
            if ($data['role'] == 1) {
                header('Location: index.php'); 
            } else {
                header('Location: ../home.php'); 
            }
        } else {
            $error = "Sai tài khoản hoặc mật khẩu!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="login-container">
        <h2>Đăng Nhập</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST" action="">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" name="login">Đăng Nhập</button>
            <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
        </form>
    </div>
</body>
</html>
