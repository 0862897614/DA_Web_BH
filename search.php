<?php
require_once './pages/db.php'; // Đường dẫn tới file kết nối DB

$keyword = isset($_GET['q']) ? trim($_GET['q']) : '';
$products = [];
if ($keyword !== '') {
    // Escape keyword để tránh lỗi SQL injection
    $safe_keyword = $db->link->real_escape_string($keyword);
    $sql = "SELECT * FROM tbl_product WHERE product_name LIKE '%$safe_keyword%' OR product_desc LIKE '%$safe_keyword%' ORDER BY product_id DESC";
    $result = $db->select($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kết quả tìm kiếm | IVY moda</title>
    <base href="http://localhost/Doan_Web/" />
    <link rel="stylesheet" href="/Doan_Web/assets/css/style.css">
    <link rel="stylesheet" href="./assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="/Doan_Web/assets/js/index.js"></script>
    <script src="/Doan_Web/assets/js/listSize.js"></script>
    <script src="/Doan_Web/assets/js/cart.js"></script>
    <script src="/Doan_Web/assets/js/addprd.js"></script>
    <script src="/Doan_Web/assets/js/filter.js"></script>
</head>
<body>
<div class="wrapper">
    <?php include './pages/header.php'; ?>
    <main id="main" class="site-main">
        <div class="main-content">
            <div class="breadcrumb-products">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="./home.php" class="breadcrumb__link">Trang chủ</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link" style="text-transform: uppercase;">Kết quả tìm kiếm</a>
                    </li>
                </ol>
            </div>
        </div>
    </main>
    <section class="section-list-products">
        <div class="main-content">
            <div class="box-products">
                <div class="sidebar-prod sidebar-prod-pc">
                    <form id="filterForm" method="get" action="search.php">
                        <input type="hidden" name="q" value="<?php echo htmlspecialchars($keyword); ?>">
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
                                <button class="btn btn--large btn--outline but_filter_remove" type="button">Bỏ lọc</button>
                                <button class="btn btn--large but_filter_product" type="submit">Lọc</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="main-prod">
                    <div class="top-main-prod">
                        <h1 class="sub-title-main">
                            KẾT QUẢ TÌM KIẾM THEO '<?php echo htmlspecialchars($keyword); ?>'
                        </h1>
                        <div class="filter-prod">
                            <form id="sortForm" method="get" action="search.php" style="display:inline;">
                                <input type="hidden" name="q" value="<?php echo htmlspecialchars($keyword); ?>">
                                <input type="hidden" name="sort" id="sortInput" value="<?php echo isset($_GET['sort']) ? htmlspecialchars($_GET['sort']) : ''; ?>">
                                <div class="item-filter">
                                    <span id="sortBySpan">Sắp xếp theo</span>
                                    <div class="list-number-row" id="sortList" style="display:none;">
                                        <div class="item-number-row"><a href="#" data-sort="default">Mặc định</a></div>
                                        <div class="item-number-row"><a href="#" data-sort="newest">Mới nhất</a></div>
                                        <div class="item-number-row"><a href="#" data-sort="bestseller">Được mua nhiều nhất</a></div>
                                        <div class="item-number-row"><a href="#" data-sort="favorite">Được yêu thích nhất</a></div>
                                        <div class="item-number-row"><a href="#" data-sort="price_desc">Giá: cao đến thấp</a></div>
                                        <div class="item-number-row"><a href="#" data-sort="price_asc">Giá: thấp đến cao</a></div>
                                    </div>
                                    <div class="sidebar-prod">
                                        <div class="filter-search">
                                            <i class="fa-solid fa-angle-down"></i>
                                            <i class="fa-solid fa-angle-up"></i>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sub-main-prod">
                        <div class="list-products list-products-cat" style="padding-top:0px">
                            <?php if (count($products) > 0): ?>
                                <?php foreach ($products as $prd): ?>   
                                    <div class="item-cat-product">
                                        <div class="product-cat">
                                            <div class="info-ticket ticket-news">new</div>
                                            <div class="thumb-product">
                                                <a href="product.php?id=<?php echo $prd['product_id']; ?>">
                                                    <img src="assets/img/<?php echo $prd['product_img']; ?>" alt="<?php echo htmlspecialchars($prd['product_name']); ?>" class="lazy" />
                                                    <?php if (!empty($prd['product_img_hover'])): ?>
                                                        <img src="assets/img/<?php echo $prd['product_img_hover']; ?>" alt="<?php echo htmlspecialchars($prd['product_name']); ?>" class="hover-img lazy" />
                                                    <?php endif; ?>
                                                </a>
                                                <div class="info-product">
                                                    <div class="list-color">
                                                        <ul>
                                                            <?php
                                                            $colors = array_filter(explode(',', $prd['product_color']));
                                                            foreach ($colors as $i => $color):
                                                            ?>
                                                            <li<?php if ($i == 0) echo ' class="checked"'; ?>>
                                                                <a href="">
                                                                    <img src="./assets/color/<?php echo trim($color); ?>.png" alt="" />
                                                                </a>
                                                            </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                        <div class="favourite">
                                                            <i class="fa-regular fa-heart"></i>
                                                        </div>
                                                    </div>
                                                    <h3 class="title-prd">
                                                        <a href="product.php?id=<?php echo $prd['product_id']; ?>"><?php echo $prd['product_name']; ?></a>
                                                    </h3>
                                                    <div class="price-prd">
                                                        <span><?php echo number_format($prd['product_price_new']); ?>đ</span>
                                                        <?php if ($prd['product_price_new'] < $prd['product_price']): ?>
                                                            <span class="old-price"><?php echo number_format($prd['product_price']); ?>đ</span>
                                                        <?php endif; ?>
                                                        <div class="bx bx-shopping-bag"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p>Không tìm thấy sản phẩm phù hợp.</p>
                            <?php endif; ?>
                        </div>
                        <!-- Phân trang nếu cần -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './pages/footer.php'; ?>
</div>
<script>
// Xử lý dropdown sắp xếp
(function() {
  var sortBySpan = document.getElementById('sortBySpan');
  var sortList = document.getElementById('sortList');
  if (sortBySpan && sortList) {
    sortBySpan.addEventListener('click', function(e) {
      e.stopPropagation();
      sortList.style.display = sortList.style.display === 'block' ? 'none' : 'block';
    });
    document.addEventListener('click', function() {
      sortList.style.display = 'none';
    });
    sortList.querySelectorAll('a[data-sort]').forEach(function(a) {
      a.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('sortInput').value = this.getAttribute('data-sort');
        document.getElementById('sortForm').submit();
      });
    });
  }
})();
</script>
</body>
</html>