document.addEventListener("DOMContentLoaded", () => {
  updateHandles(min, max); // Thiết lập giá trị ban đầu của thanh trượt
  filterProducts(); // Lọc sản phẩm theo giá trị mặc định ban đầu
});
// Thêm sự kiện cho các lựa chọn kích thước
document.querySelectorAll(".item-side-size .item-sub-list").forEach((item) => {
  item.addEventListener("click", function () {
    const radio = this.querySelector('input[type="radio"]');

    // Bỏ chọn các radio khác và xóa lớp active khỏi tất cả các item-sub-list
    document
      .querySelectorAll('.item-side-size input[type="radio"]')
      .forEach((r) => {
        r.checked = false; // Bỏ chọn tất cả
        r.closest(".item-sub-list").classList.remove("active"); // Bỏ lớp active
      });

    // Chọn radio button và thêm lớp active cho phần tử item-sub-list hiện tại
    radio.checked = true;
    this.classList.add("active"); // Thay đổi ở đây để thêm lớp active cho item-sub-list

    // Cập nhật các giá trị màu đã chọn
    const hiddenInput = document.querySelector('input[name="hid_size"]');
    const selectedSizes = Array.from(
      document.querySelectorAll('.item-side-size input[type="radio"]:checked')
    ).map((checkbox) => checkbox.value);

    // Cập nhật giá trị vào input ẩn
    hiddenInput.value = selectedSizes.join(",");

    filterProducts(); // Cập nhật danh sách sản phẩm khi bộ lọc thay đổi
  });
});

const sliderRange = document.getElementById("slider-range");
const handleFrom = document.getElementById("handle-from");
const handleTo = document.getElementById("handle-to");
const amountFrom = document.getElementById("amount-from");
const amountTo = document.getElementById("amount-to");
const slider = document.getElementById("slider");

const min = 0;
const max = 10000000;

function formatCurrency(value) {
  return value.toLocaleString("vi-VN") + "đ";
}

function parseCurrency(text) {
  return parseInt(text.replace(/[^0-9]/g, ""));
}

function updateHandles(fromValue, toValue) {
  amountFrom.textContent = formatCurrency(fromValue);
  amountTo.textContent = formatCurrency(toValue);

  const percentageFrom = ((fromValue - min) / (max - min)) * 100;
  const percentageTo = ((toValue - min) / (max - min)) * 100;

  sliderRange.style.left = `${percentageFrom}%`;
  sliderRange.style.width = `${percentageTo - percentageFrom}%`;
  handleFrom.style.left = `${percentageFrom}%`;
  handleTo.style.left = `${percentageTo}%`;
}

function handleDrag(event, handle) {
  const onMouseMove = (e) => {
    const newLeft = Math.min(
      Math.max(e.clientX - slider.getBoundingClientRect().left, 0),
      slider.clientWidth
    );
    const value = Math.round((newLeft / slider.clientWidth) * max);

    if (handle === handleFrom && value <= parseCurrency(amountTo.textContent)) {
      updateHandles(value, parseCurrency(amountTo.textContent));
    } else if (
      handle === handleTo &&
      value >= parseCurrency(amountFrom.textContent)
    ) {
      updateHandles(parseCurrency(amountFrom.textContent), value);
    }
  };

  const onMouseUp = () => {
    document.removeEventListener("mousemove", onMouseMove);
    document.removeEventListener("mouseup", onMouseUp);
    filterProducts();
  };

  document.addEventListener("mousemove", onMouseMove);
  document.addEventListener("mouseup", onMouseUp);
}

handleFrom.addEventListener("mousedown", (event) =>
  handleDrag(event, handleFrom)
);
handleTo.addEventListener("mousedown", (event) => handleDrag(event, handleTo));

function filterProducts() {
  const fromValue = parseCurrency(amountFrom.textContent);
  const toValue = parseCurrency(amountTo.textContent);
  const selectedDiscount = document.querySelector(
    'input[name="hid_discount"]'
  ).value;
  const products = document.querySelectorAll(".product");

  products.forEach((product) => {
    const price = parseInt(product.getAttribute("data-price"));
    const discount = product.getAttribute("data-discount");

    const isPriceInRange = price >= fromValue && price <= toValue;
    const isDiscountMatched =
      selectedDiscount === "" || discount === selectedDiscount;

    product.style.display =
      isPriceInRange && isDiscountMatched ? "block" : "none";
  });
}

document
  .querySelectorAll('.item-side-discount input[type="radio"]')
  .forEach((radio) => {
    radio.addEventListener("click", function () {
      const hiddenInput = document.querySelector('input[name="hid_discount"]');

      // Kiểm tra nếu radio đã chọn và giá trị đã nằm trong hidden input
      if (this.checked && hiddenInput.value === this.value) {
        // Bỏ chọn radio và xóa giá trị hidden input để hủy bộ lọc
        this.checked = false;
        hiddenInput.value = "";
      } else {
        // Chọn radio và cập nhật giá trị vào hidden input để áp dụng bộ lọc mới
        hiddenInput.value = this.value;
      }

      filterProducts(); // Cập nhật danh sách sản phẩm khi bộ lọc thay đổi
    });
  });
document
  .querySelectorAll('.color-filter input[type="checkbox"]')
  .forEach((checkbox) => {
    checkbox.addEventListener("click", function () {
      const hiddenInput = document.querySelector('input[name="hid_color"]');
      const selectedColors = Array.from(
        document.querySelectorAll(
          '.color-filter input[type="checkbox"]:checked'
        )
      ).map((checkbox) => checkbox.value);

      // Cập nhật giá trị của input ẩn với các màu đã chọn
      hiddenInput.value = selectedColors.join(",");

      filterProducts(); // Cập nhật danh sách sản phẩm khi bộ lọc thay đổi
    });
  });

const sortBySpan = document.querySelector(".item-filter span");
const filterSearch = document.querySelector(".sidebar-prod .filter-search");
const listNumberRow = document.querySelector(".list-number-row");
const angleDownIcon = document.querySelector(".sidebar-prod .fa-angle-down");
const angleUpIcon = document.querySelector(".sidebar-prod .fa-angle-up");

const toggleList = () => {
  listNumberRow.classList.toggle("active");
  angleDownIcon.classList.toggle("active");
  angleUpIcon.classList.toggle("active");
};

// Thêm sự kiện click cho phần tử <span>
sortBySpan.addEventListener("click", toggleList);

// Thêm sự kiện click cho icon
filterSearch.addEventListener("click", toggleList);

const paginationItems = document.querySelectorAll(".list-inline-pagination li");
const firstPageItem = document.querySelector(".first-page");
const lastPageItem = document.querySelector(".last-page");

function updatePagination(activeIndex) {
  // Ẩn "Trang đầu" khi trang active là 1, hiển thị khi active từ 2 trở đi
  if (activeIndex === 2) {
    firstPageItem.style.display = "none";
  } else {
    firstPageItem.style.display = "inline-flex";
  }

  // Ẩn "Trang cuối" khi active là 7 hoặc trang cuối
  if (activeIndex >= paginationItems.length - 2) {
    lastPageItem.style.display = "none";
  } else {
    lastPageItem.style.display = "inline-flex";
  }

  // Xóa class "active" từ tất cả các phần tử và đặt "active" cho phần tử được chọn
  paginationItems.forEach((item, index) => {
    item.classList.toggle("active", index === activeIndex);
  });
}

// Gắn sự kiện click cho từng mục phân trang
paginationItems.forEach((item, index) => {
  item.addEventListener("click", function (e) {
    e.preventDefault();
    if (index !== 0 && index !== paginationItems.length - 1) {
      updatePagination(index);
    }
  });
});

// Đặt trạng thái mặc định cho trang 1 (chỉ mục 2 trong danh sách)
updatePagination(2);
