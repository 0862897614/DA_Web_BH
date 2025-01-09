<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị - Admin Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            background-color: #f4f4f9;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            position: fixed;
            box-sizing: border-box;
            overflow-y: auto;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar-header img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .sidebar-header h2 {
            font-size: 20px;
            margin: 0;
            color: rgb(139, 187, 172);
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav li {
            margin-bottom: 20px;
        }

        .sidebar-nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            transition: background-color 0.3s;
        }

        .sidebar-nav a:hover {
            background-color: #575757;
            border-radius: 4px;
        }

        .main-content {
            margin-left: 250px;
            padding: 25px 20px;
            box-sizing: border-box;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 40px;
        }

        header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        .header-actions {
            display: flex;
            align-items: center;
        }

        .username {
            font-size: 16px;
            margin-right: 20px;
        }

        .logout-btn {
            background-color: #ff4757;
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #e84118;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-card h3 {
            font-size: 16px;
            color: #333;
        }

        .stat-card p {
            font-size: 20px;
            color: #4caf50;
        }

        .recent-activity {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .recent-activity h2 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #e84118;
        }

        .recent-activity ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .recent-activity li {
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .recent-activity li:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../assets/img/logoadminpng.png" alt="Avatar">
            <h2>Phạm Nghĩa</h2>
        </div>
        <ul class="sidebar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="userlist.php">Quản lý người dùng</a></li>
            <li><a href="categorylist.php">Quản lý sản phẩm</a></li>
            <li><a href="orderlist.php">Đơn hàng</a></li>
            <li><a href="settings.php">Cài đặt</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Chào mừng đến với Quản trị</h1>
            <div class="header-actions">
                <span class="username">Xin chào, <?php echo htmlspecialchars("PhamNghia"); ?></span>
                <a href="logout.php"><button class="logout-btn">Đăng xuất</button></a>
            </div>
        </header>

        <div class="content">
            <div class="stats">
                <div class="stat-card">
                    <h3>Người dùng</h3>
                    <p>2,345</p>
                </div>
                <div class="stat-card">
                    <h3>Sản phẩm</h3>
                    <p>678</p>
                </div>
                <div class="stat-card">
                    <h3>Đơn hàng</h3>
                    <p>123</p>
                </div>
                <div class="stat-card">
                    <h3>Lợi nhuận</h3>
                    <p>50,000,000 VNĐ</p>
                </div>
            </div>

            <div class="recent-activity">
                <h2>Hoạt động gần đây</h2>
                <ul>
                    <li>
                        <span>Đơn hàng #VN123</span> - Đã hoàn tất
                    </li>
                    <li>
                        <span>Sản phẩm mới</span> - Đã thêm vào kho
                    </li>
                    <li>
                        <span>Người dùng mới</span> - Đã đăng ký
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
