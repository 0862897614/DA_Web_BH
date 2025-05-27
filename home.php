<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ | IVY moda</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- đường dẫn cơ sở -->
    <base href="http://localhost/Doan_Web/">

    <!-- style, js -->
    <link rel="stylesheet" href="/Doan_Web/assets/css/style.css">
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/listSize.js"></script>
    <script src="./assets/js/cart.js"></script>
    <script src="./assets/js/addprd.js"></script>
</head>

<body>

    <?php
    include("pages/header.php");
    include("pages/slideShow.php");
    include("pages/homeProduct.php");
    include("pages/homePromote.php");
    include("pages/footer.php");
    ?>

    <div class="overlay"></div>
</body>

</html>