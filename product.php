<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sản phẩm</title>

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
    <script src="assets/js/index.js"></script>
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
          <div class = "product_detail_head">
              <div class="breadcrumb-products">
                <ol class="breadcrumb_list">
                  <li class="breadcrumb_item">
                    <a href="./home.php">Trang chủ</a>
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
                          <img src="./assets/img/category_prd1_1.1.webp" class="thumb_ctgr" alt="">
                          <img src="./assets/img/category_prd1_1.2.webp" class="thumb_ctgr" alt="">
                          <img src="./assets/img/category_prd1_1.3.webp" class="thumb_ctgr" alt="">
                          <img src="./assets/img/category_prd1_1.4.webp" class="thumb_ctgr" alt="">
                          <img src="./assets/img/category_prd1_1.5.webp" class="thumb_ctgr" alt="">
                          <img src="./assets/img/category_prd1_1.6.webp" class="thumb_ctgr" alt="">
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
                      <span>(0 đánh giá)</span>
    
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
                          <input type="radio" name="size" value="s" >
                            <span>s</span>
                          </input>
                        </label>
                        <label>
                          <input type="radio" name="size" value="m" >
                            <span>m</span>
                          </input>
                        </label>
                        <label>
                          <input type="radio" name="size" value="l" >
                            <span class="slash">l</span>
                          </input>
                        </label>
                        <label>
                          <input type="radio" name="size" value="xl" >
                            <span>xl</span>
                          </input>
                        </label>
                        <label>
                          <input type="radio" name="size" value="xxl" >
                            <span class="slash">xxl</span>
                          </input>
                        </label>
                      </div>
                      <div class="size_product">
                        <a href="" class="table-size-product">
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
                    <input type="number" value="1" name="quantity" min="0" max="99" id="quantityInput">
                    </div>
                    <div class="product-quantity product-detail__quantity--increase">+</div>  
                  </div>
  
                    </div>
                    <div class="product-detail__actions">
                      <button class="btn btn--large add-to-cart-detail">Thêm vào giỏ</button>
                      <a href="">
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
                          <div class="tab-item" ><span>Chi Tiết sản phẩm</span></div>
                          <div class="tab-item"><span>Bảo quản</span></div>
                        </div>
                        <div class="line-tab"></div>
                      </div>
                      <div class="product-detail__tab-body">
                        <div class="tab-content active">
                          <p>Ánh nắng mùa thu, dù không còn chói chang, vẫn mang đến cảm giác ấm áp, nhẹ nhàng tựa như sự mềm mại và lãng mạn luôn hiện hữu bên trong mỗi người phụ nữ. Đây chính là nguồn cảm hứng chủ đạo cho những thiết kế tinh tế trong BST Muse of the Sun.</p>
                          <p>Mỗi thiết kế công sở hiện đại trên gam màu vàng nhạt của sắc thu mang đến cảm giác vừa ấm áp vừa dịu mắt, như tia nắng lấp lánh trên từng trang phục.</p>
                          <p>Áo vest Tweed Kose là một thiết kế thanh lịch và hiện đại, mang đến vẻ ngoài sang trọng với chất liệu tweed cao cấp, bền bỉ. </p>
                          <p>Thiết kế cổ đức không chân mang đến sự tinh tế, mới mẻ, giúp chiếc áo vừa giữ được nét trang trọng của vest nhưng vẫn tạo cảm giác nhẹ nhàng, thoải mái cho người mặc. Độ dài ngang hông tôn dáng, cân đối và dễ phối đồ. Với kiểu dáng này, bạn có thể dễ dàng kết hợp áo vest với áo sơ mi, chân váy, quần tây hay quần jeans để tạo nên phong cách từ chuyên nghiệp đến thời trang đường phố.</p>
                          <p><strong>Thông tin mẫu:</strong></p>
                          <p><strong>Chiều cao:</strong> 165cm </p>
                          <p><strong>Cân nặng:</strong> 49kg</p>
                          <p><strong>Số đo 3 vòng:</strong> 81-63-90 cm </p>
                          <p>Mẫu mặc size S</p>
                          <p>Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua màn hình máy tính/ điện thoại.</p>
                        </div>
                        <div class="tab-content ">
                          <table>
                            <tbody >
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
                            <strong>* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt.</strong>
                          </p>
                          <p>* Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai giãn.</p>
                          <p>* Vải voan, lụa, chiffon nên giặt bằng tay.</p>
                          <p>* Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có thể giặt máy.</p>
                          <p>* Vải thô, tuytsi, kaki có phối màu tương phản hay trang trí voan, lụa, đá cườm thì cần giặt tay.</p>
                          <p>* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans. Nếu giặt thì nên lộn trái sản phẩm khi giặt, đóng khuy, kéo khóa, không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản phẩm khác. </p>
                            <p>* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha loãng.</p>
                            <p>* Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.</p>
                            <p>* Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.</p>
                            <p>* Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải.</p>
                            <p>* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, mát và không bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. </p>
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
                      <img
                        src="assets/img/category_row_prd1_1.1.webp"
                        alt=""
                        class="hover-owl-lazy"
                      />
                    </a>
                  </div>
                  <div class="info_prd">
                    <div class="list-color">
                      <ul>
                         <li>
                          <a href="">
                            <img src="./assets/img/color-1-3.png" alt="" style="border: 1px solid rgba(0, 0, 0, 0.2);"/>
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
                      <div class="bx bx-shopping-bag"></div>
                    </div>
                  </div>
                </div>
  
                <!-- prd2 -->
                <div class="product">
                  <div class="info-ticket ticket-news">new</div>
                  <div class="thumb_prd">
                    <a href="">
                      <img src="assets/img/category_row_prd1_2.webp" alt="" class="owl-lazy" />
                      <img
                        src="assets/img/category_row_prd1_2.1.webp"
                        alt=""
                        class="hover-owl-lazy"
                      />
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
                      <div class="bx bx-shopping-bag"></div>
                    </div>
                  </div>
                </div>
                <!-- prd3 -->
                <div class="product">
                  <div class="info-ticket ticket-news">new</div>
                  <div class="thumb_prd">
                    <a href="">
                      <img src="assets/img/category_row_prd1_3.webp" alt="" class="owl-lazy" />
                      <img
                        src="assets/img/category_row_prd1_3.1.webp"
                        alt=""
                        class="hover-owl-lazy"
                      />
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
                        <li >
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
                      <div class="bx bx-shopping-bag"></div>
                    </div>
                  </div>
                </div>
                <!-- prd4 -->
                <div class="product">
                  <div class="info-ticket ticket-news">new</div>
                  <div class="thumb_prd">
                    <a href="">
                      <img src="assets/img/category_row_prd1_4.webp" alt="" class="owl-lazy" />
                      <img
                        src="assets/img/category_row_prd1_4.1.webp"
                        alt=""
                        class="hover-owl-lazy"
                      />
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
                      <div class="bx bx-shopping-bag"></div>
                    </div>
                  </div>
                </div>
  
            </div>
            
             </div>
         </div>
     </div>

         <div class="trending" style ="padding-bottom:25px">
           <div class="main-content">
            <h3 class="title-trending">Sale lớn hấp dẫn - Deal độc quyền chỉ có tại IVY</h3>
             <img class="thumb_trending" src="./assets/img/banner-5.webp" alt=""></div>
          </div>
      <?php
        include("pages/footer.php");
      ?>
      <!-- <div class="overlay"></div> -->
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
  const showMore = document.querySelector('.show-more');
  const imageDown = showMore.querySelector('.image-down');
  const imageUp = showMore.querySelector('.image-up');
  const tabContents = document.querySelectorAll('.tab-content'); // Chọn tất cả các .tab-content

  imageDown.addEventListener('click', function () {
    tabContents.forEach(tabContent => {
      tabContent.classList.add('expanded'); // Mở rộng tất cả nội dung
    });
    imageDown.style.display = 'none'; // Ẩn image-down
    imageUp.style.display = 'block'; // Hiện image-up
  });

  imageUp.addEventListener('click', function () {
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('expanded'); // Thu gọn tất cả nội dung
    });
    imageUp.style.display = 'none'; // Ẩn image-up
    imageDown.style.display = 'block'; // Hiện image-down
  });
});


const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$('.tab-item');
const contents = $$('.tab-content');

const tabActive = $('.tab-item.active');
const line = $('.line-tab');

// Hàm để cập nhật vị trí và kích thước của line
function updateLinePosition(element) {
  line.style.left = element.offsetLeft + 'px';
  line.style.width = element.offsetWidth + 'px';
}

// Cập nhật line theo tab hiện tại khi trang được load
updateLinePosition(tabActive);

tabs.forEach((tab, index) => {
  const content = contents[index];

  tab.onclick = function () {
    // Loại bỏ lớp 'active' khỏi tab và content hiện tại
    $('.tab-item.active').classList.remove('active');
    $('.tab-content.active').classList.remove('active');

    // Cập nhật vị trí và kích thước của line khi click vào tab mới
    updateLinePosition(this);

    // Thêm lớp 'active' vào tab và content được click
    this.classList.add('active');
    content.classList.add('active');
  };
});


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
      img.style.display = 'block';  // Hiển thị ảnh trong khoảng hiện tại
    } else {
      img.style.display = 'none';   // Ẩn ảnh ngoài khoảng hiển thị
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

    </script>
</body>
</html>