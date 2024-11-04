<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giới thiệu sản phẩm</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- đường dẫn cơ sở -->
    <base href="http://localhost/Doan_Web/">

    <!-- style, js -->
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="./assets/js/index.js"></script>
  </head>
  <body>
    <div class="wrapper_info">
      
      <?php 
        include("../pages/header.php");
      ?>
      <div class="container">
        <div class="breadcrumb-products">
          <div class="main-content">
            <ol class="breadcrumb_list">
              <li class="breadcrumb_item">
                <a href="./home.php">Trang chủ</a>
              </li>
              <li class="breadcrumb_item">
                <a href="./lookbook/info.php">MUSE OF THE SUN</a>
              </li>
            </ol>
          </div>
        </div>
        
          <div class="banner-look-book">
            <div class="main-content">
              <div class="img-banner-look bg-before bg-before_02">
                <img src="./assets/img/banner-3.webp" alt="MUSE OF THE SUN" class="lazy" loading="lazy" >
              </div>
            </div>
          </div>

          

          <div class="section-info-lb">
            <div class="main-content">
              <div class="main-info-lb">
                <h4 class="text1"> FALL/ WINTER COLLECTION 2024 </h4>
                <h3 class="text2"> MUSE OF THE SUN </h3>
                <p class="text3"> Mỗi thiết kế công sở hiện đại trên gam màu vàng nhạt của sắc thu mang đến cảm giác vừa ấm áp vừa dịu mắt, như tia nắng lấp lánh trên từng trang phục. Kết hợp cùng những đường cắt may khéo léo và chất liệu cao cấp, mỗi chi tiết đều được chăm chút tỉ mỉ để thể hiện sự tinh tế, thời thượng. BST Muse of the Sun giúp phái đẹp tôn lên vẻ đẹp tự nhiên, thanh thoát, mỗi người phụ nữ đều trở thành nàng thơ dưới ánh nắng thu, tự do, rực rỡ và tỏa sáng theo cách riêng..</p>
              </div>
               <div class="trending">
            <img class="thumb_trending" src="./assets/img/trending.webp" alt="">
          </div>
              <div class="list-img-lb multi-img-lb"> 
                <div class="item-img-lb"><img src="./assets/img/info_item-img-lb-1.webp" alt=""></div>
                <div class="item-img-lb"><img src="./assets/img/info_item-img-lb-1.1.webp" alt=""></div>
              </div>
            </div>
          </div>

         
      </div>
      <?php
        include("../pages/footer.php");
      ?>
    </div>
  </body>
</html>
