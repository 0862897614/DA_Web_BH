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
