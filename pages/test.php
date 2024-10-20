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

    <!-- đường dẫn cơ sở -->
    <base href="http://localhost/Doan_Web/">

    <!-- style, js -->
    <link rel="stylesheet" href="./assets/style.css" />
    <script src="./assets/js/index.js"></script>
  </head>
<style>
 .price-prd .bx-shopping-bag {
  width: 35px;
  height: 35px;
  border-radius: 8px 0;
  background-color: #ccc;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #ccc;
  cursor: pointer;
  font-size: 19.5px;
  position: relative;
  z-index: 1;
}

.list-size {
  position: absolute;
  bottom: 37px;
  right: -1px;
  background: #ffffff;
  border: 1px solid #e7e8e9;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
  z-index: 100;
}

.list-size ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.list-size ul li {
  display: block;
}

.list-size ul li button {
  width: 110px;
  outline: 0;
  background-color: transparent;
  border: 2px solid transparent;
  font-weight: 600;
  line-height: 24px;
  color: #221f20;
  display: block;
  cursor: pointer;
  text-transform: uppercase;
  margin: 0 auto;
  padding: 12px 0;
  font-size: 16px;
}

.bx-shopping-bag.active .list-size {
  opacity: 1;
  visibility: visible;
}

.list-size ul li:hover button {
  border: 2px solid #87ceeb;
  border-radius: 8px;
}


</style>
<body>
      <!-- home-new-product 1-->
    <section class="home-new-prd" data-id="1">
            <div id="ivy-moda-1" class="row-prd product-list active">
              <!-- prd5 -->
              <div class="product">
                <div class="info-ticket ticket-news">new</div>
              <div class="badget ivymoda"><span>-30<span>%</span></span></div>
                <div class="thumb_prd">
                  <a href="">
                    <img src="assets/img/prd1-5.webp" alt="" class="owl-lazy" />
                    <img
                      src="assets/img/prd1-5.1.webp"
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
                          <img src="./assets/img/color-1-4.png" alt="" />
                        </a>
                      </li>
                    </ul>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                  </div>
                  <h3 class="title-prd">
                    <a href="">Đầm Tuysi A Yellow</a>
                  </h3>
                  <div class="price-prd">
                    <span>1.743.000đ</span>
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
              <!-- prd6 -->
              <div class="product">
                <div class="info-ticket ticket-news">new</div>
             <div class="badget ivymoda"><span>-30<span>%</span></span></div>
                <div class="thumb_prd">
                  <a href="">
                    <img src="assets/img/prd1-6.webp" alt="" class="owl-lazy" />
                    <img
                      src="assets/img/prd1-6.1.webp"
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
                          <img src="./assets/img/color-1-3.1.png" alt="" />
                        </a>
                      </li>
                    </ul>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                  </div>
                  <h3 class="title-prd">
                    <a href="">Quần suông Black Tuysi khuy kiểu</a>
                  </h3>
                  <div class="price-prd">
                    <span>1.533.000đ</span>
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
              <!-- prd7 -->
              <div class="product">
                <div class="info-ticket ticket-news">new</div>
              <div class="badget ivymoda"><span>-30<span>%</span></span></div>
                <div class="thumb_prd">
                  <a href="">
                    <img src="assets/img/prd1-7.webp" alt="" class="owl-lazy" />
                    <img
                      src="assets/img/prd1-7.1.webp"
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
                    </ul>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                  </div>
                  <h3 class="title-prd">
                    <a href="">Đầm xòe Tuysi Cream tay dài</a>
                  </h3>
                  <div class="price-prd">
                    <span>1.393.000đ</span>
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
              <div class="btns">
                <div class="btn btn-left-prd">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="btn btn-right-prd">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </div>
            </div>
    </section>

    <script>
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

    </script>
</body>
</html>