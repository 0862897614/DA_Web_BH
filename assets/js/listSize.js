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

    // Bắt sự kiện click vào từng nút size
    const sizeButtons = bag.querySelectorAll(".list-size button");
    sizeButtons.forEach((btn) => {
      btn.addEventListener("click", function(e) {
        e.stopPropagation();
        // Hiệu ứng chọn size
        const ul = btn.closest('ul');
        ul.querySelectorAll('button').forEach(b => b.classList.remove('selected'));
        btn.classList.add('selected');
        // Lấy thông tin sản phẩm
        const productElem = bag.closest(".product");
        if (!productElem) return;
        const title = productElem.querySelector(".title-prd a").innerText;
        const price = productElem.querySelector(".price-prd span").innerText;
        const img = productElem.querySelector(".thumb_prd img").src;
        const size = btn.innerText.toUpperCase();
        // Tạo object sản phẩm
        const cartItem = {
          title,
          price,
          img,
          size,
          quantity: 1
        };
        if (typeof addToCart === 'function') {
          addToCart(cartItem);
        }
        if (typeof showAddToCartPopup === 'function') {
          showAddToCartPopup();
        }
        if (typeof renderCart === 'function') {
          renderCart();
        }
        // Đóng danh sách size và bỏ active
        const listSize = bag.querySelector('.list-size');
        if (listSize) {
          listSize.style.opacity = 0;
          listSize.style.visibility = 'hidden';
        }
        bag.classList.remove('active');
      });
    });
  });
}
