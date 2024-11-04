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
    <base href="http://localhost/Doan_Web/" />

    <!-- style, js -->
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="./assets/js/index.js"></script>

</head>

<body>
    <div class="wrapper">
        <?php 
        include("../pages/header.php");
        ?>
        <main id="main" class="site-main">
            <div class="main-content">
                <div class="breadcrumb-products">
                    <ol class="breadcrumb__list">
                        <li class="breadcrumb__item">
                            <a href="./home.php" class="breadcrumb__link">Trang chủ</a>
                        </li>
                        <li class="breadcrumb__item">
                            <a href="./category/product.php" class="breadcrumb__link"
                                style=" text-transform: uppercase;">Best Seller Nữ</a>
                        </li>
                    </ol>
                </div>
            </div>
        </main>
        <section class="section-list-products">
            <div class="main-content">
                <div class="box-products">
                    <div class="sidebar-prod sidebar-prod-pc">
                        <div class="filter-by-side">
                            <ul class="list-side">

                                <li class="item-side item-side-size">
                                    <input type="checkbox" id="toggle-size" hidden>
                                    <label for="toggle-size" class="item-side-title">
                                        Size
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-minus"></i>
                                    </label>

                                    <div class="sub-list-side">
                                        <input type="hidden" name="hid_size" />

                                        <label class="item-sub-list">
                                            <input type="radio" class="field-cat" name="att_size[]" value="s" />
                                            <span class="item-sub-title item-sub-pr ">S</span>
                                        </label>

                                        <label class="item-sub-list">
                                            <input type="radio" class="field-cat" name="att_size[]" value="m" />
                                            <span class="item-sub-title item-sub-pr ">M</span>
                                        </label>

                                        <label class="item-sub-list">
                                            <input type="radio" class="field-cat" name="att_size[]" value="l" />
                                            <span class="item-sub-title item-sub-pr">L</span>
                                        </label>

                                        <label class="item-sub-list">
                                            <input type="radio" class="field-cat" name="att_size[]" value="xl" />
                                            <span class="item-sub-title item-sub-pr">XL</span>
                                        </label>

                                        <label class="item-sub-list">
                                            <input type="radio" class="field-cat" name="att_size[]" value="xxl" />
                                            <span class="item-sub-title item-sub-pr">XXL</span>
                                        </label>
                                    </div>
                                </li>

                                <li class="item-side item-side-color">
                                    <input type="checkbox" id="toggle-color" hidden>
                                    <label for="toggle-color" class="item-side-title">
                                        Màu sắc
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-minus"></i>
                                    </label>
                                    <div class="color-filter">
                                        <input type="hidden" name="hid_color" />
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="049" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/049.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="001" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/001.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="038" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/038.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="054" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/054.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="015" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/015.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="031" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/031.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="052" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/052.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="004" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/004.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="064" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/064.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="035" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/035.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="011" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/011.png" alt="" />
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" class="field-cat" name="att_color[]" value="033" />
                                            <span class="item-sub-title item-sub-pr">
                                                <img src="./assets/color/033.png" alt="" />
                                            </span>
                                        </label>
                                    </div>
                                </li>

                                <li class="item-side item-side-price">
                                    <input type="checkbox" id="toggle-price" hidden>
                                    <label for="toggle-price" class="item-side-title">
                                        Mức giá
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-minus"></i>
                                    </label>
                                    <div class="sub-list-side">
                                        <div class="slider" id="slider">
                                            <div class="slider-range" id="slider-range"></div>
                                            <div class="slider-handle" id="handle-from" style="left: 0;"></div>
                                            <div class="slider-handle" id="handle-to" style="left: 100%;"></div>
                                        </div>
                                        <div class="amount-label">
                                            <div class="amount" id="amount-from">0đ</div>
                                            <div class="amount" id="amount-to">10,000,000đ</div>
                                        </div>
                                    </div>
                                </li>

                                <li class="item-side item-side-discount">
                                    <input type="checkbox" id="toggle-discount" hidden>
                                    <label for="toggle-discount" class="item-side-title">
                                        Mức chiết khấu
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-minus"></i>
                                    </label>
                                    <div class="sub-list-side">
                                        <input type="hidden" name="hid_discount" />
                                        <label class="item-sub-list">
                                            <input type="radio" name="att_discount" class="field-cat" value="1" />
                                            <span class="item-sub-title">Dưới 30%</span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="radio" name="att_discount" class="field-cat" value="2" />
                                            <span class="item-sub-title">Từ 30% - 50%</span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="radio" name="att_discount" class="field-cat" value="3" />
                                            <span class="item-sub-title">Từ 50% - 70%</span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="radio" name="att_discount" class="field-cat" value="4" />
                                            <span class="item-sub-title">Từ 70%</span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="radio" name="att_discount" class="field-cat" value="5" />
                                            <span class="item-sub-title">Giá đặc biệt</span>
                                        </label>
                                    </div>
                                </li>

                                <li class="item-side item-side-advanced">
                                    <input type="checkbox" id="toggle-advanced" hidden>
                                    <label for="toggle-advanced" class="item-side-title">
                                        Nâng cao
                                        <i class="fa-solid fa-plus"></i>
                                        <i class="fa-solid fa-minus"></i>
                                    </label>
                                    <div class="sub-list-side">
                                        <label class="item-sub-list">
                                            <input type="checkbox" name="att_chat_lieu" />
                                            <span class="item-sub-title">Chất liệu
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="item-sub-side">
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Chiffon" />
                                                    <span class="item-title">Chiffon</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Cotton" />
                                                    <span class="item-title">Cotton</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Denim" />
                                                    <span class="item-title">Denim</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Dạ" />
                                                    <span class="item-title">Dạ</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Da lộn" />
                                                    <span class="item-title">Da lộn</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Kaki" />
                                                    <span class="item-title">Kaki</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="chat_lieu[]"
                                                        value="Nhung" />
                                                    <span class="item-title">Nhung</span>
                                                </label>
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" name="att_kieu_dang" />
                                            <span class="item-sub-title">Kiểu dáng
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="item-sub-side">
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="kieu_dang[]"
                                                        value="Bo gấu" />
                                                    <span class="item-title">Bo gấu</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="kieu_dang[]"
                                                        value="Xuông" />
                                                    <span class="item-title">Xuông</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="kieu_dang[]"
                                                        value="Ôm" />
                                                    <span class="item-title">Ôm</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="att_kieu_dang"
                                                        value="Xòe" />
                                                    <span class="item-title">Xòe</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="att_kieu_dang"
                                                        value="Baggy" />
                                                    <span class="item-title">Baggy</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="kieu_dang[]"
                                                        value="Culottes" />
                                                    <span class="item-title">Culottes</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="kieu_dang[]"
                                                        value="Skinny" />
                                                    <span class="item-title">Skinny</span>
                                                </label>
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" name="att_hoa_tiet" />
                                            <span class="item-sub-title">Họa tiết
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="item-sub-side">
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Chấm bi" />
                                                    <span class="item-title">Chấm bi</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Họa tiết 3D" />
                                                    <span class="item-title">Họa tiết 3D</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="In hình" />
                                                    <span class="item-title">In hình</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Kẻ" />
                                                    <span class="item-title">Kẻ</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Trơn" />
                                                    <span class="item-title">Trơn</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Hoa" />
                                                    <span class="item-title">Hoa</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="hoa_tiet[]"
                                                        value="Khác" />
                                                    <span class="item-title">Khác</span>
                                                </label>
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" name="att_co_ao" />
                                            <span class="item-sub-title">Cổ áo
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="item-sub-side">
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ cách điệu" />
                                                    <span class="item-title">Cổ cách điệu</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ chữ V" />
                                                    <span class="item-title">Cổ chữ V</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ lọ" />
                                                    <span class="item-title">Cổ lọ</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ tròn" />
                                                    <span class="item-title">Cổ tròn</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ trái tim" />
                                                    <span class="item-title">Cổ trái tim</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Cổ Peterpan" />
                                                    <span class="item-title">Cổ Peterpan</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="co_ao[]"
                                                        value="Khác" />
                                                    <span class="item-title">Khác</span>
                                                </label>
                                            </span>
                                        </label>
                                        <label class="item-sub-list">
                                            <input type="checkbox" name="att_tay_ao" />
                                            <span class="item-sub-title">Chất liệu
                                                <i class="fa-solid fa-plus"></i>
                                                <i class="fa-solid fa-minus"></i>
                                            </span>
                                            <span class="item-sub-side">
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Tay cộc" />
                                                    <span class="item-title">Tay cộc</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Tay dài" />
                                                    <span class="item-title">Tay dài</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Tay lỡ" />
                                                    <span class="item-title">Tay lỡ</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Denim" />
                                                    <span class="item-title">Denim</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Sát nách" />
                                                    <span class="item-title">Sát nách</span>
                                                </label>
                                                <label>
                                                    <input type="checkbox" class="field-cat" name="tay_ao[]"
                                                        value="Khác" />
                                                    <span class="item-title">Khác</span>
                                                </label>
                                            </span>
                                        </label>
                                    </div>
                                </li>

                            </ul>
                            <div class="filter">
                                <button class="btn btn--large btn--outline but_filter_remove">
                                    Bỏ lọc
                                </button>
                                <button class="btn btn--large but_filter_product">Lọc</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-prod">
                        <div class="top-main-prod">
                            <h1 class="sub-title-main">
                                Best Seller Nữ
                            </h1>
                            <div class="filter-prod">
                                <div class="item-filter">
                                    <span>Sắp xếp theo</span>
                                    <input type="hidden" name="=sel_order" value="">
                                    <div class="list-number-row">
                                        <div class="item-number-row"><a href="" class="sel-order-option">Mặc định</a>
                                        </div>
                                        <div class="item-number-row"><a href="" class="sel-order-option">Mới nhất</a>
                                        </div>
                                        <div class="item-number-row"><a href="" class="sel-order-option">Được mua nhiều
                                                nhất</a></div>
                                        <div class="item-number-row"><a href="" class="sel-order-option">Được yêu thích
                                                nhất</a></div>
                                        <div class="item-number-row"><a href="" class="sel-order-option">Giá: cao đến
                                                thấp</a></div>
                                        <div class="item-number-row"><a href="" class="sel-order-option">Giá: thấp đến
                                                cao</a></div>
                                    </div>
                                    <div class="sidebar-prod">
                                        <div class="filter-search">
                                            <i class="fa-solid fa-angle-down"></i>
                                            <i class="fa-solid fa-angle-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-main-prod">
                            <!-- <div class="banner-sub-main">
                                <div class="img-banner-sub">
                                    <a href=""><img src="./assets/img/banner-2.png" alt="" class="lazy">
                                    </a>
                                </div>
                            </div> -->
                            <div class="list-products list-products-cat" style="padding-top:0px">
                                <!-- 1 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-1.webp"
                                                    alt="Đầm lụa đai nơ Dreamy" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-1.1.webp"
                                                    alt="Đầm lụa đai nơ Dreamy" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/050.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/058.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm lụa đai nơ Dreamy</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.590.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-2.webp"
                                                    alt="Chân váy Tuysi A 2 lớp" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-2.1.webp"
                                                    alt="Chân váy Tuysi A 2 lớp" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/048.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/050.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Chân váy Tuysi A 2 lớp</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>850.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-3.webp"
                                                    alt="Đầm cổ V xếp hoa eo" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-3.1.jpg"
                                                    alt="Đầm cổ V xếp hoa eo" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/002.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm cổ V xếp hoa eo</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>2.290.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-4.webp"
                                                    alt="Áo sơ mi Long Sleeves Tencel" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-4.1.webp"
                                                    alt="Áo sơ mi Long Sleeves Tencel" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/004.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/058.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo sơ mi Long Sleeves Tencel</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.090.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-5.webp"
                                                    alt="Đầm Pink Silk Sarong Lady" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-5.1.webp"
                                                    alt="Đầm Pink Silk Sarong Lady" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/058.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm Pink Silk Sarong Lady</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.790.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-6.webp"
                                                    alt="Áo khoác Tweed cổ V Flare" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-6.1.webp"
                                                    alt="Áo khoác Tweed cổ V Flare" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/002.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/k02.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo khoác Tweed cổ V Flare</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>2.190.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 7 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-7.webp"
                                                    alt="Áo khoác Tweed Elegance" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-7.1.webp"
                                                    alt="Áo khoác Tweed Elegance" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/k01.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/k49.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo khoác Tweed Elegance</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>2.490.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 8 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-8.webp"
                                                    alt="Chân váy Layers chữ A phối đai" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-8.1.webp"
                                                    alt="Chân váy Layers chữ A phối đai"
                                                    class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/024.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/063.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Chân váy Layers chữ A phối đai</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.290.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--9 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-9.webp"
                                                    alt="Áo sơ mi Tencel Blossom" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-9.1.webp"
                                                    alt="Áo sơ mi Tencel Blossom" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/001.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/004.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo sơ mi Tencel Blossom</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.190.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--10 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-10.webp"
                                                    alt="Áo sơ mi Tencel Blossom" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-10.1.webp"
                                                    alt="Áo sơ mi Tencel Blossom" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/001.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/004.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo sơ mi Tencel Blossom</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.190.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--11 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-11.webp"
                                                    alt="Đầm cổ đức Eternal phối đai" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-11.1.webp"
                                                    alt="Đầm cổ đức Eternal phối đai" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/002.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm cổ đức Eternal phối đai</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>2.590.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--12 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd1-12.webp"
                                                    alt="Chân váy Layers chữ A phối đai" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd1-12.1.webp"
                                                    alt="Chân váy Layers chữ A phối đai"
                                                    class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/024.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/063.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Chân váy Layers chữ A phối đai</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.290.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 13 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-13.1.webp"
                                                    alt="Đầm lụa Allure họa tiết" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-13.webp"
                                                    alt="Đầm lụa Allure họa tiết" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/h02.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/h49.png" alt=""></a>
                                                        </li>

                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm lụa Allure họa tiết</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.990.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 14 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-14.webp"
                                                    alt="Đầm lụa Allure họa tiết" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-14.1.webp"
                                                    alt="Đầm lụa Allure họa tiết" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/h02.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/h49.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm lụa Allure họa tiết</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>990.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 15 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-15.webp"
                                                    alt="Quần dài Tuysi Drape" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-15.1.webp"
                                                    alt="Quần dài Tuysi Drape" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/023.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Quần dài Tuysi Drape</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.090.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 16 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-16.webp"
                                                    alt="Đầm Tweed chữ A Flare" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-16.1.webp"
                                                    alt="Đầm Tweed chữ A Flare" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/001.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm Tweed chữ A Flare</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.790.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 17 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-17.webp"
                                                    alt="Áo sơ mi lụa tay dài Grace" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-17.1.webp"
                                                    alt="Áo sơ mi lụa tay dài Grace" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/002.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Áo sơ mi lụa tay dài Grace</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.350.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 18 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-18.webp"
                                                    alt="Chân váy Khaki xếp ly" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-18.1.webp"
                                                    alt="Chân váy Khaki xếp ly" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/003.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/004.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                        <li>
                                                            <a href=""><img src="./assets/color/002.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/065.png" alt=""></a>
                                                        </li>

                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Chân váy Khaki xếp ly</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.090.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 19 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-19.1.webp"
                                                    alt="Đầm Tweed chữ A Flare" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-19.webp"
                                                    alt="Đầm Tweed chữ A Flare" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/001.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Đầm Tweed chữ A Flare</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>1.790.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 20 -->
                                <div class="item-cat-product">
                                    <div class="product-cat">
                                        <div class="info-ticket seller">* Best Seller</div>
                                        <div class="thumb-product">
                                            <a href=""><img src="./assets/img/ctgr-prd2-20.webp"
                                                    alt="Chân váy Tweed chữ A" class="lazy"></img></a>
                                            <a href=""><img src="./assets/img/ctgr-prd2-20.1.webp"
                                                    alt="Chân váy Tweed chữ A" class="hover-img lazy"></img></a>
                                            <div class="info-product">
                                                <div class="list-color">
                                                    <ul>
                                                        <li>
                                                            <a href=""><img src="./assets/color/049.png" alt=""></a>
                                                        </li>
                                                        <li class="checked">
                                                            <a href=""><img src="./assets/color/001.png" alt=""
                                                                    style="border: 1px solid rgba(0, 0, 0, 0.2);"></a>
                                                        </li>
                                                    </ul>
                                                    <div class="favourite">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                                <h3 class="title-prd">
                                                    <a href="">Chân váy Tweed chữ A</a>
                                                </h3>
                                                <div class="price-prd">
                                                    <span>990.000đ</span>
                                                    <div class="bx bx-shopping-bag">
                                                        <div class="list-size">
                                                            <ul>
                                                                <li>
                                                                    <button>s</button>
                                                                </li>
                                                                <li>
                                                                    <button>m</button>
                                                                </li>
                                                                <li>
                                                                    <button>l</button>
                                                                </li>
                                                                <li>
                                                                    <button>xl</button>
                                                                </li>
                                                                <li>
                                                                    <button>xxl</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <ul class="list-inline-pagination">
                                <li class="first-page" style="display: none;"><a href="">Trang đầu</a></li>
                                <li><a href="">«</a></li>
                                <li id="products_active_ts" class="active"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">»</a></li>
                                <li class="last-page"><a href="">Trang cuối</a></li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php
        include("../pages/footer.php");
      ?>
    </div>
</body>
<script src="./assets/js/filter.js"></script>
<script src="./assets/js/listSize.js"></script>

</html>