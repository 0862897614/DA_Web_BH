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
    rel="stylesheet" />

  <!-- font-awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- boxicons -->
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />

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
  <div class="wrapper">
    <?php
    include("../pages/header.php");
    ?>
    <!-- cart -->
    <section class="cart">
      <div class="main-content">
        <form action="frm_cart" id="frm_cart" method="post">
          <div class="cart-page">
            <div class="row">
              <div class="column checkout-prb">
                <div class="checkout-process-bar">
                  <ul>
                    <li class="active"><span>Giỏ hàng</span></li>
                    <li><span>Đặt hàng</span></li>
                    <li><span>Thanh toán</span></li>
                    <li><span>Hoàn thành đơn</span></li>
                  </ul>
                </div>
                <div class="box_product_total_cart">
                  <div class="cart__list">
                    <h2 class="cart-title">
                      Giỏ hàng của bạn
                      <b> <span class="cart-total">2</span> Sản Phẩm</b>
                    </h2>
                    <table class="cart__table">
                      <thead>
                        <tr>
                          <th>Tên Sản phẩm</th>
                          <th>Chiết khấu</th>
                          <th>Số lượng</th>
                          <th>Tổng tiền</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="cart__product-item">
                              <div class="cart__product-item__img">
                                <a href=""><img src="./assets/img/prd1-1.webp" alt="" /></a>
                              </div>
                              <div class="cart__product-item__content">
                                <a href="">
                                  <h3 class="cart__product-item__title">
                                    Áo vest Tweed Kose
                                  </h3>
                                </a>
                                <div class="cart__product-item__properties">
                                  <p>Màu sắc: <span>Đen</span></p>
                                  <p>Size: <span>s</span></p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="cart-sale-price">
                            <p>-100.000đ</p>
                            <p class="cart-sale_item">( -8.4% )</p>
                          </td>
                          <td>
                            <div class="product-detail__quantity">
                              <div class="product-detail__quantity-input">
                                <div
                                  class="product-quantity product-detail__quantity--decrease">
                                  -
                                </div>
                                <div class="input-wrapper">
                                  <input
                                    type="number"
                                    value="1"
                                    name="quantity"
                                    min="0"
                                    max="99"
                                    id="quantityInput" />
                                </div>
                                <div
                                  class="product-quantity product-detail__quantity--increase">
                                  +
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cart__product-item__price">
                              1.390.000đ
                            </div>
                          </td>
                          <td>
                            <a href="" class="remove-item-cart">
                              <i class="fa-solid fa-trash-can"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td>
                            <div class="cart__product-item">
                              <div class="cart__product-item__img">
                                <a href=""><img src="./assets/img/prd1-3.webp" alt="" /></a>
                              </div>
                              <div class="cart__product-item__content">
                                <a href="">
                                  <h3 class="cart__product-item__title">
                                    Áo vest Tweed Kose
                                  </h3>
                                </a>
                                <div class="cart__product-item__properties">
                                  <p>Màu sắc: <span>Đen</span></p>
                                  <p>Size: <span>M</span></p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="cart-sale-price">
                            <p>-100.000đ</p>
                            <p class="cart-sale_item">( -8.4% )</p>
                          </td>
                          <td>
                            <div class="product-detail__quantity">
                              <div class="product-detail__quantity-input">
                                <div
                                  class="product-quantity product-detail__quantity--decrease">
                                  -
                                </div>
                                <div class="input-wrapper">
                                  <input
                                    type="number"
                                    value="1"
                                    name="quantity"
                                    min="0"
                                    max="99"
                                    id="quantityInput" />
                                </div>
                                <div
                                  class="product-quantity product-detail__quantity--increase">
                                  +
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="cart__product-item__price">
                              1.390.000đ
                            </div>
                          </td>
                          <td>
                            <a href="" class="remove-item-cart">
                              <i class="fa-solid fa-trash-can"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="cart__list--attach"></div>
                </div>
                <a href="home.php" class="btn btn--large btn--outline btn-cart-continue">
                  <span><i class="fa-solid fa-arrow-left"></i></span>
                  <span>Tiếp tục mua hàng</span>
                </a>
              </div>
              <div class="column col-summary">
                <div class="cart-summary">
                  <div class="cart-summary__overview">
                    <h3>Tổng tiền giỏ hàng</h3>
                    <div class="cart-summary__overview__item">
                      <p>Tổng sản phẩm</p>
                      <p class="total-product">2</p>
                    </div>
                    <div class="cart-summary__overview__item">
                      <p>Tổng tiền hàng</p>
                      <p class="total-not-discount">7.170.000đ</p>
                    </div>
                    <div class="cart-summary__overview__item">
                      <p>Thành tiền</p>
                      <p class="order-price-total">5.665.500đ</p>
                    </div>
                    <div class="cart-summary__overview__item">
                      <p>Tạm tính</p>
                      <p class="order-price-total">5.665.500đ</p>
                    </div>
                  </div>
                  <div class="cart-summary__note">
                    <div class="inner-note">
                      <div class="left-inner-note">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                      </div>
                      <div class="content-inner-note">
                        Hiện nay có một số trường hợp lừa đảo, mạo danh thương
                        hiệu IVY moda. Quý khách vui lòng kiểm tra kỹ thông
                        tin đơn hàng và sản phẩm trước khi nhận hàng để đảm
                        bảo quyền lợi của mình.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cart-summary__button">
                  <a href="./oder.php" class="btn btn--large">Đặt hàng</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <?php
    include("../pages/footer.php");
    ?>
  </div>
</body>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const updateCartTotals = () => {
      let totalNotDiscount = 0; // Tổng tiền chưa giảm giá
      let totalOrderPrice = 0; // Thành tiền sau khi giảm giá

      // Lặp qua tất cả các sản phẩm trong giỏ hàng
      document.querySelectorAll(".cart__table tbody").forEach((tbody) => {
        const priceText = tbody.querySelector(".cart__product-item__price").textContent.trim();
        const discountText = tbody.querySelector(".cart-sale-price p:first-child").textContent.trim();

        // Chuyển giá trị từ định dạng tiền tệ thành số
        const price = parseInt(priceText.replace(/\./g, "").replace("đ", ""), 10);
        const discount = parseInt(discountText.replace(/\./g, "").replace("đ", ""), 10);

        // Tính tổng tiền
        totalNotDiscount += price;
        totalOrderPrice += price + (isNaN(discount) ? 0 : discount); // Nếu không có giảm giá, discount là 0
      });

      // Cập nhật các giá trị hiển thị
      document.querySelector(".total-not-discount").textContent = totalNotDiscount.toLocaleString("vi-VN") + "đ";
      document.querySelectorAll(".order-price-total").forEach((element) => {
        element.textContent = totalOrderPrice.toLocaleString("vi-VN") + "đ";
      });
    };

    const updateCartTotal = () => {
      const productCount = document.querySelectorAll(".cart__table tbody").length;
      document.querySelector(".cart-total").textContent = productCount;
      document.querySelector(".total-product").textContent = productCount;

      // Cập nhật tổng tiền
      updateCartTotals();
    };

    // Lắng nghe sự kiện click trên nút "Xóa sản phẩm"
    document.querySelectorAll(".remove-item-cart").forEach((button) => {
      button.addEventListener("click", function(event) {
        event.preventDefault();

        const confirmDelete = confirm("Xóa sản phẩm khỏi giỏ hàng?");
        if (confirmDelete) {
          const tbody = this.closest("tbody");
          if (tbody) {
            tbody.remove(); // Xóa sản phẩm
            updateCartTotal(); // Cập nhật giỏ hàng
          }
        }
      });
    });

    // Lắng nghe sự kiện thay đổi số lượng sản phẩm trong input
    document.querySelectorAll(".product-detail__quantity-input input").forEach((input) => {
      input.addEventListener("change", function() {
        const value = parseInt(this.value, 10);

        // Kiểm tra giá trị hợp lệ (>= 0)
        if (isNaN(value) || value < 0) {
          alert("Số lượng không hợp lệ!");
          this.value = 1; // Gán giá trị mặc định
        }

        // Khi thay đổi số lượng, tính lại tổng giá
        const tbody = this.closest("tbody");
        if (tbody) {
          const unitPriceText = tbody.querySelector(".cart__product-item__price").textContent.trim();
          const discountText = tbody.querySelector(".cart-sale-price p:first-child").textContent.trim();

          // Chuyển giá trị từ định dạng tiền tệ thành số
          const unitPrice = parseInt(unitPriceText.replace(/\./g, "").replace("đ", ""), 10);
          const discount = parseInt(discountText.replace(/\./g, "").replace("đ", ""), 10);

          // Tính tổng tiền cho sản phẩm này
          const totalProductPrice = value * (unitPrice + (isNaN(discount) ? 0 : discount));

          tbody.querySelector(".cart__product-item__price").textContent = totalProductPrice.toLocaleString("vi-VN") + "đ";
        }

        updateCartTotals(); // Cập nhật tổng tiền
      });
    });
  });
</script>

</html>