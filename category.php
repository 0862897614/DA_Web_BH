<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang chủ | IVY moda</title>

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

    <!-- style, js -->
    <link rel="stylesheet" href="assets/style.css" />
    <script src="assets/js"></script>
  </head>
<body>
     <div class="wrapper">
      <?php 
        include("pages/header.php");
      ?>
     <div class="container">
       <div class="main-content">
        <div class = "product_detail">
            <div class="breadcrumb-products">
              <ol class="breadcrumb_list">
                <li class="breadcrumb_item">
                  <a href="">Trang chủ</a>
                </li>
                <li class="breadcrumb_item">
                  <a href="">Nữ</a>
                </li>
                <li class="breadcrumb_item">
                  <a href="">Áo vest Tweed Kose</a>
                </li>
              </ol>
            </div>
        </div>
          <div class="product-detail">
            <div class="row">
              <div class="column">
                <div class="product-detail__gallery">
                  <div class="product-gallery__slide--big">
                    <img src="./assets/img/category_prd1_1.webp" alt="">
                  </div>
                  <div class="product-gallery__slide--small">
                    <div class="list_img">
                      <!-- chèn thẻ img -->
                    </div>
                    <div class="swiper-nav-prev">
                      <i class="fa-solid fa-angle-up"></i>
                    </div>
                    <div class="swiper-nav-next">
                      <i class="fa-solid fa-angle-down"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column">
                <h1 class="title">Áo vest Tweed Kose</h1>
                <div class="product-detail__sub-info">
                  <span>67B9916</span>
                  <i class="fa-solid fa-star"></i>
                  <span>(0 đánh giá)</span>

                </div>
                <div class="product-detail__price">
                  <b>1.990.000đ</b>
                  <div class="product-detail__color">
                    <p>Màu sắc: Kẻ Be sáng </p>
                  </div>
                  <ul>
                    <li class="checked">
                      <img src="./assets/img/color-1-1.png" alt="">
                    </li>
                  </ul>
                </div>
                <div class="product-detail__size">

                </div>
                <div class="product-detail__quantity"></div>
                <div class="product-detail__actions"></div>
                <div class="product-detail-divider"></div>
                <div class="product-detail__tab"></div>
              </div>
            </div>
          </div>
        </div>
     </div>
      <?php
        include("pages/footer.php");
      ?>
      <div class="overlay"></div>
    </div>

</body>
</html>