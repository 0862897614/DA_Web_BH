<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản phẩm</title>

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

    <base href="http://localhost/Doan_Web/">

    <!-- style, js -->
    <link rel="stylesheet" href="/Doan_Web/assets/css/style.css">
    <link rel="stylesheet" href="/Doan_Web/assets/style.css" />
    <script src="/Doan_Web/assets/js/index.js"></script>
    <script src="/Doan_Web/assets/js/listSize.js"></script>
    <script src="/Doan_Web/assets/js/cart.js"></script>

</head>

<body>
    <div class="wrapper">
        <?php
        include("pages/header.php");
        ?>
        <div class="container">

            <!-- product_detail -->
            <div class="product_detail">
                <div class="main-content">
                    <div class="product_detail_head">
                        <div class="breadcrumb-products">
                            <ol class="breadcrumb_list">
                                <li class="breadcrumb_item">
                                    <a href="./home.php">Trang chủ</a>
                                </li>
                                <li class="breadcrumb_item">
                                    <a href="">Nữ</a>
                                </li>
                                <li class="breadcrumb_item">
                                    <a href="product.php">Áo vest Tweed Kose</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="product-detail_body">
                        <div class="row">
                            <div class="column">
                                <div class="product-detail__gallery">
                                    <div class="product-gallery__slide--big">
                                        <img src="./assets/img/category_prd1_1.webp" class="_thumb_ctgr" alt="">
                                    </div>
                                    <div class="product-gallery__slide--small">
                                        <div class="slide_shower_small">
                                            <div class="list_images">
                                                <img src="./assets/img/category_prd1_1.1.webp" class="thumb_ctgr"
                                                    alt="">
                                                <img src="./assets/img/category_prd1_1.2.webp" class="thumb_ctgr"
                                                    alt="">
                                                <img src="./assets/img/category_prd1_1.3.webp" class="thumb_ctgr"
                                                    alt="">
                                                <img src="./assets/img/category_prd1_1.4.webp" class="thumb_ctgr"
                                                    alt="">
                                                <img src="./assets/img/category_prd1_1.5.webp" class="thumb_ctgr"
                                                    alt="">
                                                <img src="./assets/img/category_prd1_1.6.webp" class="thumb_ctgr"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper swiper-nav-prev">
                                            <i class="fa-solid fa-angle-up"></i>
                                        </div>
                                        <div class="swiper swiper-nav-next">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product-detail__information">
                                    <h1 class="title">Áo vest Tweed Kose</h1>
                                    <div class="product-detail__sub-info">
                                        <p>SKU:<span> 67B9916</span></p>
                                        <div class="list_star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span>(5.0 đánh giá)</span>

                                    </div>
                                    <div class="product-detail__price">
                                        <b>1.590.000đ</b>
                                        <span>1.990.000đ</span>
                                        <div class="product-detail__price-sale">-20<span>%</span>
                                        </div>
                                    </div>
                                    <div class="product-detail__color">
                                        <p>Màu sắc: Kẻ Be sáng </p>
                                        <ul>
                                            <li class="checked">
                                                <img src="./assets/img/color-1-1.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-detail__size">
                                        <div class="product-detail__size__input">
                                            <label>
                                                <input type="radio" name="size" value="s">
                                                <span>s</span>
                                                </input>
                                            </label>
                                            <label>
                                                <input type="radio" name="size" value="m">
                                                <span>m</span>
                                                </input>
                                            </label>
                                            <label>
                                                <input type="radio" name="size" value="l">
                                                <span class="slash">l</span>
                                                </input>
                                            </label>
                                            <label>
                                                <input type="radio" name="size" value="xl">
                                                <span>xl</span>
                                                </input>
                                            </label>
                                            <label>
                                                <input type="radio" name="size" value="xxl">
                                                <span class="slash">xxl</span>
                                                </input>
                                            </label>
                                        </div>
                                        <div class="size_product">
                                            <a href="javascript:void(0);" class="table-size-product">
                                                <span> <i class='bx bx-ruler'></i>
                                                    Kiểm tra size của bạn</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail__quantity">
                                        <p>Số lượng</p>
                                        <div class="product-detail__quantity-input">
                                            <div class="product-quantity product-detail__quantity--decrease">-</div>
                                            <div class="input-wrapper">
                                                <input type="number" value="1" name="quantity" min="0" max="99"
                                                    id="quantityInput">
                                            </div>
                                            <div class="product-quantity product-detail__quantity--increase">+</div>
                                        </div>

                                    </div>
                                    <div class="product-detail__actions">
                                        <button class="btn btn--large add-to-cart-detail">Thêm vào giỏ</button>
                                        <a href="Payment/cart.php">
                                            <button class="btn btn--large btn--outline">Mua hàng</button>
                                        </a>
                                        <button class="btn btn--large btn--outline btn--wishlist">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="product-detail__actions__find">
                                        <a href="">Tìm tại cửa hàng</a>
                                    </div>
                                    <div class="product-detail-divider"></div>
                                    <div class="product-detail__tab">
                                        <div class="tabs-list">
                                            <div class="product-detail__tab-header">
                                                <div class="tab-item active"><span>Giới thiệu</span></div>
                                                <div class="tab-item"><span>Chi Tiết sản phẩm</span></div>
                                                <div class="tab-item"><span>Bảo quản</span></div>
                                            </div>
                                            <div class="line-tab"></div>
                                        </div>
                                        <div class="product-detail__tab-body">
                                            <div class="tab-content active">
                                                <p>Ánh nắng mùa thu, dù không còn chói chang, vẫn mang đến cảm giác ấm
                                                    áp, nhẹ nhàng tựa như sự mềm mại và lãng mạn luôn hiện hữu bên trong
                                                    mỗi người phụ nữ. Đây chính là nguồn cảm hứng chủ đạo cho những
                                                    thiết kế tinh tế trong BST Muse of the Sun.</p>
                                                <p>Mỗi thiết kế công sở hiện đại trên gam màu vàng nhạt của sắc thu mang
                                                    đến cảm giác vừa ấm áp vừa dịu mắt, như tia nắng lấp lánh trên từng
                                                    trang phục.</p>
                                                <p>Áo vest Tweed Kose là một thiết kế thanh lịch và hiện đại, mang đến
                                                    vẻ ngoài sang trọng với chất liệu tweed cao cấp, bền bỉ. </p>
                                                <p>Thiết kế cổ đức không chân mang đến sự tinh tế, mới mẻ, giúp chiếc áo
                                                    vừa giữ được nét trang trọng của vest nhưng vẫn tạo cảm giác nhẹ
                                                    nhàng, thoải mái cho người mặc. Độ dài ngang hông tôn dáng, cân đối
                                                    và dễ phối đồ. Với kiểu dáng này, bạn có thể dễ dàng kết hợp áo vest
                                                    với áo sơ mi, chân váy, quần tây hay quần jeans để tạo nên phong
                                                    cách từ chuyên nghiệp đến thời trang đường phố.</p>
                                                <p><strong>Thông tin mẫu:</strong></p>
                                                <p><strong>Chiều cao:</strong> 165cm </p>
                                                <p><strong>Cân nặng:</strong> 49kg</p>
                                                <p><strong>Số đo 3 vòng:</strong> 81-63-90 cm </p>
                                                <p>Mẫu mặc size S</p>
                                                <p>Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do
                                                    điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy
                                                    tính/ điện thoại.</p>
                                            </div>
                                            <div class="tab-content ">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>Dòng sản phẩm</b>
                                                            </td>
                                                            <td>You</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Nhóm sản phẩm</b>
                                                            </td>
                                                            <td>Áo khoác</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Cổ áo</b>
                                                            </td>
                                                            <td>Cổ đức không chân</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Tay áo</b>
                                                            </td>
                                                            <td>Tay dài</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Kiểu dáng</b>
                                                            </td>
                                                            <td>Xuông</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Độ dài</b>
                                                            </td>
                                                            <td>Ngang hông</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Họa tiết</b>
                                                            </td>
                                                            <td>Kẻ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>Chất liệu</b>
                                                            </td>
                                                            <td>Tweed</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-content">
                                                <p>Chi tiết bảo quản sản phẩm: </p>
                                                <p>
                                                    <strong>* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ,
                                                        tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt
                                                        ướt.</strong>
                                                </p>
                                                <p>* Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai
                                                    giãn.</p>
                                                <p>* Vải voan, lụa, chiffon nên giặt bằng tay.</p>
                                                <p>* Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có
                                                    thể giặt máy.</p>
                                                <p>* Vải thô, tuytsi, kaki có phối màu tương phản hay trang trí voan,
                                                    lụa, đá cườm thì cần giặt tay.</p>
                                                <p>* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans.
                                                    Nếu giặt thì nên lộn trái sản phẩm khi giặt, đóng khuy, kéo khóa,
                                                    không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản
                                                    phẩm khác. </p>
                                                <p>* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân
                                                    biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt
                                                    sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha
                                                    loãng.</p>
                                                <p>* Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ,
                                                    vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng
                                                    loại vải khi giặt.</p>
                                                <p>* Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ
                                                    dễ bị phai bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm
                                                    gió sẽ giữ màu vải tốt hơn.</p>
                                                <p>* Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà
                                                    nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải.</p>
                                                <p>* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho
                                                    sản phẩm dễ ủi phẳng, mát và không bị cháy, giữ màu sản phẩm được
                                                    đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. </p>
                                            </div>
                                        </div>
                                        <div class="show-more">
                                            <a href="javascript:void(0)">
                                                <img src="./assets/img/image-down.png" alt="" class="image-down">
                                                <img src="./assets/img/image-up.png" alt="" class="image-up">
                                            </a>
                                            <div class="inline"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- product-related -->
            <div class="product-related">
                <div class="main-content">
                    <div class="page-title">MUA CÙNG VỚI</div>
                    <div class="owl-stage">

                        <div class="row-prd owl-stage ">
                            <!-- prd1 -->
                            <div class="product">
                                <div class="info-ticket ticket-news">new</div>
                                <div class="thumb_prd">
                                    <a href="">
                                        <img src="assets/img/category_row_prd1_1.webp" alt="" class="owl-lazy" />
                                        <img src="assets/img/category_row_prd1_1.1.webp" alt=""
                                            class="hover-owl-lazy" />
                                    </a>
                                </div>
                                <div class="info_prd">
                                    <div class="list-color">
                                        <ul>
                                            <li>
                                                <a href="">
                                                    <img src="./assets/img/color-1-3.png" alt=""
                                                        style="border: 1px solid rgba(0, 0, 0, 0.2);" />
                                                </a>
                                            </li>
                                            <li class="checked">
                                                <a href="">
                                                    <img src="./assets/img/color-1-4.png" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="favourite">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <h3 class="title-prd">
                                        <a href="">Áo sơ mi Tencel Kose</a>
                                    </h3>
                                    <div class="price-prd">
                                        <span>1.490.000đ</span>
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

                            <!-- prd2 -->
                            <div class="product">
                                <div class="info-ticket ticket-news">new</div>
                                <div class="thumb_prd">
                                    <a href="">
                                        <img src="assets/img/category_row_prd1_2.webp" alt="" class="owl-lazy" />
                                        <img src="assets/img/category_row_prd1_2.1.webp" alt=""
                                            class="hover-owl-lazy" />
                                    </a>
                                </div>
                                <div class="info_prd">
                                    <div class="list-color">
                                        <ul>
                                            <li class="checked">
                                                <a href="">
                                                    <img src="./assets/img/color-1-1.png" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="favourite">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <h3 class="title-prd">
                                        <a href="">Chân váy kẻ Tweed Kaiwa</a>
                                    </h3>
                                    <div class="price-prd">
                                        <span>729.000đ</span>
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
                            <!-- prd3 -->
                            <div class="product">
                                <div class="info-ticket ticket-news">new</div>
                                <div class="thumb_prd">
                                    <a href="">
                                        <img src="assets/img/category_row_prd1_3.webp" alt="" class="owl-lazy" />
                                        <img src="assets/img/category_row_prd1_3.1.webp" alt=""
                                            class="hover-owl-lazy" />
                                    </a>
                                </div>
                                <div class="info_prd">
                                    <div class="list-color">
                                        <ul>
                                            <li class="checked">
                                                <a href="">
                                                    <img src="./assets/img/color-1-2.png" alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="./assets/img/color-2-1.png" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="favourite">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <h3 class="title-prd">
                                        <a href="">Áo sơ mi Tencel thêu hoa ngực</a>
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
                            <!-- prd4 -->
                            <div class="product">
                                <div class="info-ticket ticket-news">new</div>
                                <div class="thumb_prd">
                                    <a href="">
                                        <img src="assets/img/category_row_prd1_4.webp" alt="" class="owl-lazy" />
                                        <img src="assets/img/category_row_prd1_4.1.webp" alt=""
                                            class="hover-owl-lazy" />
                                    </a>
                                </div>
                                <div class="info_prd">
                                    <div class="list-color">
                                        <ul>
                                            <li class="checked">
                                                <a href="">
                                                    <img src="./assets/img/color-1-5.png" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="favourite">
                                            <i class="fa-regular fa-heart"></i>
                                        </div>
                                    </div>
                                    <h3 class="title-prd">
                                        <a href="">Chân váy bút chì Tweed Muse</a>
                                    </h3>
                                    <div class="price-prd">
                                        <span>790.000đ</span>
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
            </div>

            <div class="trending" style="padding-bottom:25px">
                <div class="main-content">
                    <h3 class="title-trending">Sale lớn hấp dẫn - Deal độc quyền chỉ có tại IVY</h3>
                    <img class="thumb_trending" src="./assets/img/banner-5.webp" alt="">
                </div>
            </div>

            <div class="overlay-size" id="overlay-size">
                <div class="fancybox-stage">
                    <div class="fancybox-content">
                        <div class="title-table-size">BẢNG TƯ VẤN SIZE</div>
                        <div class="exclusive-tabs">
                            <div class="wrapper-head">
                                <div class="exclusive-head">
                                    <div class="exclusive-tab">Nam</div>
                                    <div class="exclusive-tab active">Nữ</div>
                                    <div class="exclusive-tab">Trẻ Em</div>
                                    <div class="exclusive-tab">Giầy</div>
                                    <div class="exclusive-tab">IVY Secret</div>
                                    <div class="line-exclusive-tab"></div>
                                </div>
                            </div>
                            <!-- Nam -->
                            <div class="exclusive-content exclusive-inner ">
                                <!-- Size áo -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE ÁO</th>
                                                </tr>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>L</th>
                                                    <th>XL</th>
                                                    <th>XXL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Cổ</td>
                                                    <td>36</td>
                                                    <td>38</td>
                                                    <td>40</td>
                                                    <td>42</td>
                                                    <td>44</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Vai</td>
                                                    <td>44</td>
                                                    <td>45</td>
                                                    <td>46</td>
                                                    <td>47</td>
                                                    <td>48</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Ngực</td>
                                                    <td>90</td>
                                                    <td>94</td>
                                                    <td>98</td>
                                                    <td>102</td>
                                                    <td>106</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Eo</td>
                                                    <td>88</td>
                                                    <td>92</td>
                                                    <td>96</td>
                                                    <td>100</td>
                                                    <td>104</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Size quần -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE QUẦN</th>
                                                </tr>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>S(29)</th>
                                                    <th>M(30)</th>
                                                    <th>L(31)</th>
                                                    <th>XL(32)</th>
                                                    <th>XXL(33)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Vòng Eo</td>
                                                    <td>76</td>
                                                    <td>80</td>
                                                    <td>84</td>
                                                    <td>86</td>
                                                    <td>90</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Vòng Mông</td>
                                                    <td>91</td>
                                                    <td>95</td>
                                                    <td>99</td>
                                                    <td>104</td>
                                                    <td>109</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Cân nặng (kg)</td>
                                                    <td>62 - 68</td>
                                                    <td>68 - 70</td>
                                                    <td>70 - 74</td>
                                                    <td>74 - 78</td>
                                                    <td>78 - 82</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Chiều Cao (cm)</td>
                                                    <td>162 - 168</td>
                                                    <td>168 - 172</td>
                                                    <td>172 - 176</td>
                                                    <td>176 - 180</td>
                                                    <td>180 - 184</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Size giày dép -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE GIÀY DÉP</th>
                                                </tr>
                                                <tr>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>39</th>
                                                    <th>40</th>
                                                    <th>41</th>
                                                    <th>42</th>
                                                    <th>43</th>
                                                    <th>44</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chiều dài bàn chân (cm)</td>
                                                    <td>20,5</td>
                                                    <td>26</td>
                                                    <td>26,9</td>
                                                    <td>27,7</td>
                                                    <td>28,5</td>
                                                    <td>29,4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Nữ -->
                            <div class="exclusive-content exclusive-inner active">
                                <!-- size áo -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE VÁY ÁO NỮ</th>
                                                </tr>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>S</th>
                                                    <th>M</th>
                                                    <th>L</th>
                                                    <th>XL</th>
                                                    <th>XXL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Vai</td>
                                                    <td>36</td>
                                                    <td>37</td>
                                                    <td>38</td>
                                                    <td>39</td>
                                                    <td>40</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Ngực</td>
                                                    <td>82</td>
                                                    <td>86</td>
                                                    <td>90</td>
                                                    <td>94</td>
                                                    <td>98</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Eo</td>
                                                    <td>66</td>
                                                    <td>70</td>
                                                    <td>74</td>
                                                    <td>78</td>
                                                    <td>82</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Hông</td>
                                                    <td>90</td>
                                                    <td>94</td>
                                                    <td>98</td>
                                                    <td>102</td>
                                                    <td>106</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- size quần -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE QUẦN</th>
                                                </tr>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>S(26)</th>
                                                    <th>M(27)</th>
                                                    <th>L(28)</th>
                                                    <th>XL(29)</th>
                                                    <th>XXL(30)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Vòng Eo</td>
                                                    <td>66</td>
                                                    <td>70</td>
                                                    <td>74</td>
                                                    <td>78</td>
                                                    <td>82</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Vòng Mông</td>
                                                    <td>90</td>
                                                    <td>94</td>
                                                    <td>98</td>
                                                    <td>102</td>
                                                    <td>106</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Vòng Bụng</td>
                                                    <td>68</td>
                                                    <td>72</td>
                                                    <td>76</td>
                                                    <td>80</td>
                                                    <td>84</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Độ Dài</td>
                                                    <td>96</td>
                                                    <td>97</td>
                                                    <td>99</td>
                                                    <td>100</td>
                                                    <td>101</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- size giày dép -->
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE GIÀY DÉP</th>
                                                </tr>
                                                <tr>
                                                    <th>TÊN GỌI/SIZE</th>
                                                    <th>34</th>
                                                    <th>35</th>
                                                    <th>36</th>
                                                    <th>37</th>
                                                    <th>38</th>
                                                    <th>39</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chiều dài bàn chân</td>
                                                    <td>20,5</td>
                                                    <td>21,5</td>
                                                    <td>22 - 22,5</td>
                                                    <td>23</td>
                                                    <td>23,8 - 24,1</td>
                                                    <td>24,5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Trẻ em -->
                            <div class="exclusive-content exclusive-inner ">
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="title-table" colspan="7">SIZE VÁY ÁO TRẺ EM</th>
                                                </tr>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>CỠ / TUỔI</th>
                                                    <th>4-5</th>
                                                    <th>6-7</th>
                                                    <th>8-9</th>
                                                    <th>10-11</th>
                                                    <th>12-13</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>CHIỀU CAO (CM)</td>
                                                    <td>110</td>
                                                    <td>122</td>
                                                    <td>133</td>
                                                    <td>150</td>
                                                    <td>155</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>CÂN NẶNG (KG)</td>
                                                    <td>15-20</td>
                                                    <td>20-25</td>
                                                    <td>23-29</td>
                                                    <td>28-35</td>
                                                    <td>34-43</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>RỘNG VAI</td>
                                                    <td>29</td>
                                                    <td>30</td>
                                                    <td>31</td>
                                                    <td>32</td>
                                                    <td>33</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>VÒNG NGỰC</td>
                                                    <td>59</td>
                                                    <td>65</td>
                                                    <td>68</td>
                                                    <td>74</td>
                                                    <td>79</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>VÒNG BỤNG</td>
                                                    <td>54</td>
                                                    <td>59</td>
                                                    <td>62</td>
                                                    <td>65</td>
                                                    <td>69</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>VÒNG MÔNG</td>
                                                    <td>61</td>
                                                    <td>66</td>
                                                    <td>70</td>
                                                    <td>75</td>
                                                    <td>80</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>DÀI TAY</td>
                                                    <td>40</td>
                                                    <td>43</td>
                                                    <td>47</td>
                                                    <td>50</td>
                                                    <td>53</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>CHIỀU DÀI TỪ ĐŨNG ĐẾN ỐNG</td>
                                                    <td>42</td>
                                                    <td>52</td>
                                                    <td>59</td>
                                                    <td>66</td>
                                                    <td>72</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="7"><strong>* Số đo trong "BẢNG THÔNG SỐ" là
                                                            số đo cơ thể không phải thông số đo quần áo</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Giầy -->
                            <div class="exclusive-content exclusive-inner ">
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td colspan="3">
                                                        <h5>
                                                            <b>BẢNG THÔNG SỐ KÍCH THƯỚC GIÀY TRẺ EM</b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="txt-age-kids"><strong>Size theo Web</strong></td>
                                                    <td class="txt-age-kids"><strong>Chiều dài (cm)</strong></td>
                                                    <td class="txt-age-kids"><strong>Size số</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Size 4 - 5</td>
                                                    <td>18 cm</td>
                                                    <td>29</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 5 - 6</td>
                                                    <td>19 cm</td>
                                                    <td>30</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 6 - 7</td>
                                                    <td>20 cm</td>
                                                    <td>31</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 7 - 8</td>
                                                    <td>21 cm</td>
                                                    <td>32</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 8 - 9</td>
                                                    <td>22 cm</td>
                                                    <td>33</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 9 - 10</td>
                                                    <td>23 cm</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 10 - 11</td>
                                                    <td>24 cm</td>
                                                    <td>35</td>
                                                </tr>
                                                <tr>
                                                    <td>Size 11 - 12</td>
                                                    <td>25 cm</td>
                                                    <td>36</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Ivy Secret -->
                            <div class="exclusive-content exclusive-inner ">
                                <div class="row">
                                    <div class="column">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td class="title-table" colspan="5">Bảng size IVY SECRET</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Size</strong></td>
                                                    <td><strong>Size áo ngực</strong></td>
                                                    <td><strong>Size trên mác</strong></td>
                                                    <td><strong>Size chân ngực (cm)</strong></td>
                                                    <td><strong>Size đỉnh ngực (cm)</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>Size S</td>
                                                    <td>34</td>
                                                    <td>75A</td>
                                                    <td>68-72</td>
                                                    <td>81-83</td>
                                                </tr>
                                                <tr>
                                                    <td>Size M</td>
                                                    <td>36</td>
                                                    <td>75B</td>
                                                    <td>68-72</td>
                                                    <td>84-86</td>
                                                </tr>
                                                <tr>
                                                    <td>Size L</td>
                                                    <td>38</td>
                                                    <td>80A</td>
                                                    <td>73-77</td>
                                                    <td>85-87</td>
                                                </tr>
                                                <tr>
                                                    <td>Size XL</td>
                                                    <td>40</td>
                                                    <td>80B</td>
                                                    <td>73-77</td>
                                                    <td>88-90</td>
                                                </tr>
                                                <tr>
                                                    <td>Size XXL</td>
                                                    <td>42</td>
                                                    <td>85A</td>
                                                    <td>78-82</td>
                                                    <td>89-91</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="exit">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
            </div>

        </div>
        <?php
        include("pages/footer.php");
        ?>
        <div class="overlay"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMore = document.querySelector('.show-more');
            const imageDown = showMore.querySelector('.image-down');
            const imageUp = showMore.querySelector('.image-up');
            const tabContents = document.querySelectorAll('.tab-content'); // Chọn tất cả các .tab-content

            imageDown.addEventListener('click', function() {
                tabContents.forEach(tabContent => {
                    tabContent.classList.add('expanded'); // Mở rộng tất cả nội dung
                });
                imageDown.style.display = 'none'; // Ẩn image-down
                imageUp.style.display = 'block'; // Hiện image-up
            });

            imageUp.addEventListener('click', function() {
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('expanded'); // Thu gọn tất cả nội dung
                });
                imageUp.style.display = 'none'; // Ẩn image-up
                imageDown.style.display = 'block'; // Hiện image-down
            });
        });



        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);

        function setupTabs(tabSelector, contentSelector, lineSelector) {
            const tabs = $$(tabSelector);
            const contents = $$(contentSelector);

            const tabActive = $(tabSelector + '.active');
            const line = $(lineSelector);

            // Hàm để cập nhật vị trí và kích thước của line nếu có line
            function updateLinePosition(element) {
                if (line) {
                    line.style.left = element.offsetLeft + 'px';
                    line.style.width = element.offsetWidth + 'px';
                }
            }

            // Cập nhật line theo tab hiện tại khi trang được load
            if (tabActive) {
                updateLinePosition(tabActive);
            }

            tabs.forEach((tab, index) => {
                const content = contents[index];

                tab.onclick = function() {
                    // Loại bỏ class 'active' khỏi tab và nội dung hiện tại
                    const currentTabActive = $(tabSelector + '.active');
                    const currentContentActive = $(contentSelector + '.active');

                    if (currentTabActive) currentTabActive.classList.remove('active');
                    if (currentContentActive) currentContentActive.classList.remove('active');

                    // Thêm class 'active' vào tab và nội dung mới được click
                    this.classList.add('active');
                    content.classList.add('active');

                    // Cập nhật vị trí và kích thước của line
                    updateLinePosition(this);
                };
            });
        }

        // Thiết lập các tab cho .exclusive-tab và .exclusive-content
        setupTabs('.exclusive-tab', '.exclusive-content', '.line-exclusive-tab');

        // Thiết lập cho các nhóm tab khác nếu cần
        setupTabs('.tab-item', '.tab-content', '.line-tab');



        const quantityInput = document.getElementById('quantityInput');
        const increaseBtn = document.querySelector('.product-detail__quantity--increase');
        const decreaseBtn = document.querySelector('.product-detail__quantity--decrease');

        // Tăng số lượng
        increaseBtn.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < 99) {
                quantityInput.value = currentValue + 1;
            }
        });

        // Giảm số lượng
        decreaseBtn.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 0) {
                quantityInput.value = currentValue - 1;
            }
        });

        const thumb = document.querySelector('._thumb_ctgr');

        // Lắng nghe sự kiện di chuyển chuột
        thumb.addEventListener('mousemove', (event) => {
            // Sử dụng requestAnimationFrame để tối ưu hóa hiệu suất
            requestAnimationFrame(() => {
                const rect = thumb.getBoundingClientRect();
                const x = event.clientX - rect.left;
                const y = event.clientY - rect.top;

                // Cập nhật transform-origin để di chuyển theo chuột
                thumb.style.transformOrigin = `${(x / rect.width) * 100}% ${(y / rect.height) * 100}%`;
            });
        });

        // Khi chuột rời khỏi, đặt lại transform-origin về giữa
        thumb.addEventListener('mouseleave', () => {
            thumb.style.transformOrigin = 'center'; // Đặt lại về giữa
        });


        // Lấy các phần tử cần thiết
        const images = document.querySelectorAll('.list_images .thumb_ctgr');
        const btnPrev = document.querySelector('.swiper-nav-prev');
        const btnNext = document.querySelector('.swiper-nav-next');

        // Thiết lập chỉ số ban đầu
        let currentIndex = 0;
        const visibleImages = 4; // Số lượng ảnh hiển thị cùng lúc

        // Hàm cập nhật hiển thị hình ảnh
        function updateImageDisplay() {
            images.forEach((img, index) => {
                if (index >= currentIndex && index < currentIndex + visibleImages) {
                    img.style.display = 'block'; // Hiển thị ảnh trong khoảng hiện tại
                } else {
                    img.style.display = 'none'; // Ẩn ảnh ngoài khoảng hiển thị
                }
            });

            // Vô hiệu hóa các nút khi không còn ảnh để di chuyển
            btnPrev.style.pointerEvents = currentIndex === 0 ? 'none' : 'auto';
            btnNext.style.pointerEvents = currentIndex + visibleImages >= images.length ? 'none' : 'auto';
        }

        // Sự kiện khi bấm nút prev (lên trên)
        btnPrev.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateImageDisplay();
            }
        });

        // Sự kiện khi bấm nút next (xuống dưới)
        btnNext.addEventListener('click', () => {
            if (currentIndex + visibleImages < images.length) {
                currentIndex++;
                updateImageDisplay();
            }
        });

        // Cập nhật hiển thị ban đầu
        updateImageDisplay();

        function initShoppingBags() {
            const shoppingBags = document.querySelectorAll(".bx-shopping-bag");

            shoppingBags.forEach((bag) => {
                bag.addEventListener("click", () => {
                    const listSize = bag.querySelector(".list-size");
                    const isActive = bag.classList.toggle("active");

                    // Ẩn tất cả danh sách kích thước và bỏ active cho các phần tử khác
                    shoppingBags.forEach((b) => {
                        if (b !== bag) {
                            const otherListSize = b.querySelector(".list-size");
                            if (otherListSize) {
                                otherListSize.style.opacity = 0; // Ẩn danh sách kích thước
                                otherListSize.style.visibility = "hidden";
                            }
                            b.classList.remove("active"); // Bỏ active cho phần tử khác
                        }
                    });

                    // Chỉ hiển thị danh sách kích thước nếu phần tử hiện tại đang active
                    if (isActive && listSize) {
                        listSize.style.opacity = 1;
                        listSize.style.visibility = "visible"; // Hiển thị danh sách kích thước
                    } else if (listSize) {
                        listSize.style.opacity = 0;
                        listSize.style.visibility = "hidden"; // Ẩn danh sách nếu không active
                    }
                });
            });
        }

        initShoppingBags();

        // Thêm sự kiện cho phần tử khi click
        document.querySelector('.table-size-product').addEventListener('click', function(e) {
            e.preventDefault(); // Ngăn chặn chuyển hướng
            document.getElementById('overlay-size').classList.add('active'); // Hiện overlay-size
        });

        // Đóng khi click ra ngoài bảng fancybox-stage
        document.getElementById('overlay-size').addEventListener('click', function(e) {
            if (e.target === this) { // Chỉ đóng khi click vào nền tối, không phải nội dung bên trong
                this.classList.remove('active');
            }
        });
        // Thêm sự kiện đóng khi click vào icon 'fa-xmark'
        document.querySelector('.exit i').addEventListener('click', function() {
            document.getElementById('overlay-size').classList.remove(
                'active'); // Ẩn overlay-size khi click vào icon
        });

        function showSizeRequiredPopup() {
            let popup = document.createElement('div');
            popup.className = 'add-cart-popup';
            popup.innerHTML = `
                <div class="popup-overlay"></div>
                <div class="popup-content">
                    <div style="font-size:40px;text-align:center;margin-bottom:10px; color: #1976d2;">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div style="font-size:20px;text-align:center; color: #1976d2; font-weight:600;">Bạn chưa chọn size!</div>
                </div>
            `;
            Object.assign(popup.style, {
                position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: 9999
            });
            const overlay = popup.querySelector('.popup-overlay');
            Object.assign(overlay.style, {
                position: 'absolute', top: 0, left: 0, width: '100vw', height: '100vh', background: 'rgba(0,0,0,0.2)', zIndex: 1
            });
            const content = popup.querySelector('.popup-content');
            Object.assign(content.style, {
                position: 'absolute', top: '50%', left: '50%', transform: 'translate(-50%, -50%)', background: '#fff', borderRadius: '16px', boxShadow: '0 8px 32px rgba(0,0,0,0.18)', padding: '32px 24px', zIndex: 2, minWidth: '250px', maxWidth: '90vw', display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center',
            });
            document.body.appendChild(popup);
            setTimeout(() => { popup.remove(); }, 1200);
        }

        // Đảm bảo DOM đã load
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý thêm vào giỏ hàng cho các sản phẩm gợi ý bên dưới
            document.querySelectorAll('.product-related .bx-shopping-bag .list-size button').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    // Lấy thông tin sản phẩm
                    const productBox = btn.closest('.product');
                    const title = productBox.querySelector('.title-prd a')?.innerText.trim() || '';
                    const price = productBox.querySelector('.price-prd span')?.innerText.trim() || '';
                    const img = productBox.querySelector('.thumb_prd img')?.src || '';
                    const size = btn.innerText.trim().toUpperCase();
                    const quantity = 1;
                    if (!size) {
                        if (typeof showSizeRequiredPopup === 'function') showSizeRequiredPopup();
                        return;
                    }
                    const cartItem = { title, price, img, size, quantity };
                    if (typeof addToCart === 'function') addToCart(cartItem);
                    if (typeof showAddToCartPopup === 'function') showAddToCartPopup();
                    if (typeof renderCart === 'function') renderCart();
                    // Đóng popup size sau khi thêm
                    btn.closest('.list-size').style.opacity = 0;
                    btn.closest('.list-size').style.visibility = 'hidden';
                    btn.closest('.bx-shopping-bag').classList.remove('active');
                });
            });
        });
    </script>

</body>

</html>