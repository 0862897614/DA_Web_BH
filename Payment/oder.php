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

    <!-- <base href="http://localhost/Doan_Web/"> -->

    <!-- style, js -->
    <link rel="stylesheet" href="/Doan_Web/assets/style.css">
    <script src="./assets/js/index.js"></script>
  </head>

  <body>
    <div class="wrapper">
      <!-- <?php 
        include("pages/header.php");
      ?> -->
      <!-- oder -->
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
                  <div class="checkout-address-delivery">
                    <div class="row">
                      <div class="column-address">
                        <h3 class="checkout-title">Địa chỉ giao hàng</h3>
                        <div class="buttons">
                          <a href="" class="btn btn--large">Đăng nhập</a>
                          <a href="" class="btn btn--large btn--outline"
                            >Đăng ký</a
                          >
                        </div>
                        <p>
                          Đăng nhập/ Đăng ký tài khoản để được tích điểm và nhận
                          thêm nhiều ưu đãi từ IVY moda.
                        </p>
                        <label for="" class="ds__item">
                          <input
                            type="radio"
                            class="ds__item__input"
                            name="guest"
                            checked
                          />
                          <span class="ds__item__label">Địa chỉ</span>
                          <div class="ds__item__contact-info">
                            <div class="row">
                              <div class="column form-group">
                                <input
                                  class="form-control"
                                  name="customer_display_name"
                                  type="text"
                                  placeholder="Họ tên"
                                />
                              </div>
                              <div class="column form-group">
                                <input
                                  class="form-control"
                                  name="customer_phone"
                                  type="text"
                                  placeholder="Số điện thoại"
                                />
                              </div>
                              <div class="column form-group">
                                <select
                                  class="form-control"
                                  name="customer_region_id"
                                  id="register_region_id"
                                  data-gtm-form-interact-field-id="0"
                                >
                                  <option selected="" disabled="" value="-1">
                                    Tỉnh/Thành phố
                                  </option>
                                  <option value="511">Hà Nội</option>
                                  <option value="507">Hồ Chí Minh</option>
                                  <option value="512">Hải Phòng</option>
                                  <option value="499">Đà Nẵng</option>
                                  <option value="498">Cần Thơ</option>
                                  <option value="538">Tiền Giang</option>
                                  <option value="514">Hậu Giang</option>
                                  <option value="548">Đắk Nông</option>
                                  <option value="546">Vĩnh Phúc</option>
                                  <option value="491">Bắc Ninh</option>
                                  <option value="508">Hải Dương</option>
                                  <option value="515">Hưng Yên</option>
                                  <option value="510">Hà Nam</option>
                                  <option value="526">Nam Định</option>
                                  <option value="537">Thái Bình</option>
                                  <option value="525">Ninh Bình</option>
                                  <option value="509">Hà Giang</option>
                                  <option value="496">Cao Bằng</option>
                                  <option value="522">Lào Cai</option>
                                  <option value="549">Bắc Kạn</option>
                                  <option value="523">Lạng Sơn</option>
                                  <option value="541">Tuyên Quang</option>
                                  <option value="547">Yên Bái</option>
                                  <option value="544">Thái Nguyên</option>
                                  <option value="528">Phú Thọ</option>
                                  <option value="487">Bắc Giang</option>
                                  <option value="533">Quảng Ninh</option>
                                  <option value="521">Lai Châu</option>
                                  <option value="535">Sơn La</option>
                                  <option value="506">Hòa Bình</option>
                                  <option value="539">Thanh Hóa</option>
                                  <option value="524">Nghệ An</option>
                                  <option value="513">Hà Tĩnh</option>
                                  <option value="530">Quảng Bình</option>
                                  <option value="534">Quảng Trị</option>
                                  <option value="550">Thừa Thiên - Huế</option>
                                  <option value="532">Quảng Nam</option>
                                  <option value="531">Quảng Ngãi</option>
                                  <option value="488">Bình Định</option>
                                  <option value="529">Phú Yên</option>
                                  <option value="517">Khánh Hòa</option>
                                  <option value="518">Kon Tum</option>
                                  <option value="505">Gia Lai</option>
                                  <option value="551">Đắk Lắk</option>
                                  <option value="520">Lâm Đồng</option>
                                  <option value="527">Ninh Thuận</option>
                                  <option value="492">Bình Phước</option>
                                  <option value="540">Tây Ninh</option>
                                  <option value="486">Bình Dương</option>
                                  <option value="502">Đồng Nai</option>
                                  <option value="494">Bình Thuận</option>
                                  <option value="552">Bà Rịa - Vũng Tàu</option>
                                  <option value="519">Long An</option>
                                  <option value="504">Đồng Tháp</option>
                                  <option value="485">An Giang</option>
                                  <option value="545">Vĩnh Long</option>
                                  <option value="495">Bến Tre</option>
                                  <option value="516">Kiên Giang</option>
                                  <option value="543">Trà Vinh</option>
                                  <option value="536">Sóc Trăng</option>
                                  <option value="490">Bạc Liêu</option>
                                  <option value="497">Cà Mau</option>
                                  <option value="500">Điện Biên</option>
                                </select>
                              </div>
                              <div class="column form-group">
                                <select
                                  class="form-control"
                                  name="customer_city_id"
                                  id="register_city_id"
                                >
                                  <option value="-1">Chọn Quận/Huyện</option>
                                  <option value="778">Huyện Bình Lục</option>
                                  <option value="773">Thị xã Duy Tiên</option>
                                  <option value="774">Huyện Kim Bảng</option>
                                  <option value="775">Huyện Lý Nhân</option>
                                  <option value="776">Thành phố Phủ Lý</option>
                                  <option value="777">Huyện Thanh Liêm</option>
                                </select>
                              </div>
                              <div class="column form-group">
                                <select
                                  class="form-control"
                                  name="customer_vnward_id"
                                  id="vnward_id"
                                ></select>
                              </div>
                              <div class="column form-group">
                                <input
                                  class="form-control address-order"
                                  type="text"
                                  placeholder="Địa chỉ"
                                  name="customer_address"
                                  value=""
                                />
                              </div>
                            </div>
                          </div>
                        </label>
                      </div>
                      <div class="column-method">
                        <h3 class="checkout-title">Phương thức giao hàng</h3>
                        <div class="block-border">
                          <!-- hien tai chi lam phuong thuc giao nhanh -->
                          <label class="ds__item">
                            <input
                              id="shipping_method_1"
                              class="ds__item__input"
                              type="radio"
                              name="shipping_method"
                              value="1"
                              checked=""
                            />
                            <span class="ds__item__label"
                              >Chuyển phát nhanh
                              <span class="delivery-time"> </span>
                            </span>
                          </label>
                        </div>
                        <div class="bill">
                          <h3 class="checkout-title">
                            Bạn có muốn nhận hoá đơn VAT không ?
                            <div class="form-check form-switch">
                              <input
                                type="checkbox"
                                class="form-check-input"
                                name="receive_vat"
                                data-gtm-form-interact-field-id="1"
                              />
                            </div>
                          </h3>
                          <div
                            class="ds__item__contact-info pt-0 order_vat_form"
                          >
                            <div class="form-group">
                              <input
                                type="text"
                                name="order_vat_email"
                                class="form-control"
                                placeholder="Nhập email"
                                value=""
                              />
                            </div>
                            <div class="form-group">
                              <input
                                type="text"
                                name="order_vat_tax_code"
                                class="form-control"
                                placeholder="Nhập mã số thuế"
                                value=""
                              />
                            </div>
                            <div class="form-group">
                              <textarea
                                name="order_vat_company_name"
                                class="form-control"
                                placeholder="Nhập tên doanh nghiệp"
                              ></textarea>
                            </div>
                            <div class="form-group">
                              <textarea
                                name="order_vat_address"
                                class="form-control"
                                placeholder="Nhập địa chỉ"
                              ></textarea>
                            </div>
                            <div class="form-group">
                              <textarea
                                name="order_vat_note"
                                class="form-control"
                                placeholder="Nhập ghi chú"
                              ></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="checkout-payment">
                    <h3 class="checkout-title">Phương thức thanh toán</h3>
                    <div class="block-border">
                      <p>
                        Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ
                        tín dụng sẽ không bao giờ được lưu lại.
                      </p>
                      <div class="checkout-payment__options">
                        <label class="ds__item">
                          <input
                            class="ds__item__input"
                            type="radio"
                            name="payment_method"
                            id="payment_method_1"
                            value="1"
                            checked
                          />
                          <span class="ds__item__label">
                            Thanh toán bằng thẻ tín dụng
                          </span>
                          <span><img src="../assets/icon/1.png" alt=""></span>
                        </label>
                        <label class="ds__item">
                           <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_2" value="2">
                            <span class="ds__item__label">Thanh toán bằng thẻ ATM
                                <span>Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam.</span>
                            </span>
                        </label>
                        <label class="ds__item">
                            <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_3" value="3">
                            <span class="ds__item__label">Thanh toán bằng Momo</span>
                        <label class="ds__item">
                            <input class="ds__item__input" type="radio" name="payment_method" id="payment_method_4" value="4">
                            <span class="ds__item__label">Thanh toán khi giao hàng</span>
                      </div>
                    </div>
                  </div>
                  <div class="view-more-product">
                    <span class="btn btn--large">Hiển thị sản phẩm</span>
                  </div>
                  <div class="checkout-my-cart">
                    <div class="cart__list">
                        <h2 class="cart-title">Giỏ hàng của bạn</h2>
                        <table class="cart__table">
                            <thead>
                            <tr>
                                <th>Tên Sản phẩm</th>
                                <th>Chiết khấu</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                                                                                            <tr>
                                    <td>
                                        <div class="cart__product-item">
                                            <div class="cart__product-item__img">
                                                <a href="https://ivymoda.com/sanpham/ao-thun-om-vai-lech-ms-58m8868-40778">
                                                                                                            <img src="https://pubcdn.ivymoda.com/files/product/thumab/400/2024/11/28/b62046b5ce7c9e640ed7b1644a1ce483.webp" alt="Áo thun ôm vai lệch">
                                                                                                    </a>
                                            </div>
                                            <div class="cart__product-item__content">
                                                <a href="https://ivymoda.com/sanpham/ao-thun-om-vai-lech-ms-58m8868-40778">
                                                    <h3 class="cart__product-item__title">
                                                        Áo thun ôm vai lệch
                                                    </h3>
                                                </a>
                                                <div class="cart__product-item__properties">
                                                    <p>Màu sắc: <span>Đỏ</span></p>
                                                    <p>Size: <span>M</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-sale-price">
                                                                                                                                                                                                        </td>
                                    <td>
                                        <div class="product-detail__quantity-input">
                                            <input type="number" value="1" disabled="" readonly="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart__product-item__price">750.000đ</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>

                <div class="column col-summary">
                  <div class="cart-summary">
                    <div class="cart-summary__overview">
                      <h3>Tổng tiền giỏ hàng</h3>
                      <div class="cart-summary__overview__item">
                        <p>Tổng sản phẩm</p>
                        <p class="total-product">3</p>
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
                    <a href="" class="btn btn--large">Đặt hàng</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- <?php
        include("pages/footer.php");
      ?> -->
    </div>
  </body>
</html>
