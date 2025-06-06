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

// FILTER FORM SUBMIT BY CHANGE

document.addEventListener('DOMContentLoaded', function() {
  var filterForm = document.getElementById('filterForm');
  if (filterForm) {
    // Size chọn 1 (radio)
    document.querySelectorAll('.item-side-size .item-sub-list').forEach(function(item) {
      item.addEventListener('click', function() {
        document.querySelectorAll('.item-side-size input[type="radio"]').forEach(function(r) {
          r.checked = false;
          r.closest('.item-sub-list').classList.remove('active');
        });
        var radio = this.querySelector('input[type="radio"]');
        radio.checked = true;
        this.classList.add('active');
        var hiddenInput = document.querySelector('input[name="hid_size"]');
        hiddenInput.value = radio.value;
        filterForm.submit();
      });
    });

    // Color (checkbox)
    document.querySelectorAll('.color-filter input[type="checkbox"]').forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        var hiddenInput = document.querySelector('input[name="hid_color"]');
        var selectedColors = Array.from(document.querySelectorAll('.color-filter input[type="checkbox"]:checked')).map(function(cb) { return cb.value; });
        hiddenInput.value = selectedColors.join(',');
        filterForm.submit();
      });
    });

    // Discount (radio)
    document.querySelectorAll('.item-side-discount input[type="radio"]').forEach(function(radio) {
      radio.addEventListener('change', function() {
        var hiddenInput = document.querySelector('input[name="hid_discount"]');
        hiddenInput.value = this.checked ? this.value : '';
        filterForm.submit();
      });
    });

    // Khi thay đổi bất kỳ filter nào thì submit form (trừ nút bấm)
    filterForm.querySelectorAll('input, select').forEach(function(input) {
      input.addEventListener('change', function() {
        if (this.type === 'button' || this.type === 'submit') return;
        filterForm.submit();
      });
    });

    // Nút Bỏ lọc: reset form và submit lại
    var btnRemove = filterForm.querySelector('.but_filter_remove');
    if (btnRemove) {
      btnRemove.addEventListener('click', function(e) {
        e.preventDefault();
        filterForm.reset();
        filterForm.querySelectorAll('input[type=checkbox], input[type=radio]').forEach(function(input) {
          input.checked = false;
        });
        filterForm.submit();
      });
    }
  }

  // UI: Toggle filter list (giữ lại hiệu ứng)
  const sortBySpan = document.querySelector('.item-filter span');
  const filterSearch = document.querySelector('.sidebar-prod .filter-search');
  const listNumberRow = document.querySelector('.list-number-row');
  const angleDownIcon = document.querySelector('.sidebar-prod .fa-angle-down');
  const angleUpIcon = document.querySelector('.sidebar-prod .fa-angle-up');
  if (sortBySpan && filterSearch && listNumberRow && angleDownIcon && angleUpIcon) {
    const toggleList = () => {
      listNumberRow.classList.toggle('active');
      angleDownIcon.classList.toggle('active');
      angleUpIcon.classList.toggle('active');
    };
    sortBySpan.addEventListener('click', toggleList);
    filterSearch.addEventListener('click', toggleList);
  }

  // UI: Phân trang (giữ lại hiệu ứng click trang)
  const paginationItems = document.querySelectorAll('.list-inline-pagination li');
  const firstPageItem = document.querySelector('.first-page');
  const lastPageItem = document.querySelector('.last-page');
  function updatePagination(activeIndex) {
    if (!firstPageItem || !lastPageItem) return;
    if (activeIndex === 2) {
      firstPageItem.style.display = 'none';
    } else {
      firstPageItem.style.display = 'inline-flex';
    }
    if (activeIndex >= paginationItems.length - 2) {
      lastPageItem.style.display = 'none';
    } else {
      lastPageItem.style.display = 'inline-flex';
    }
    paginationItems.forEach((item, index) => {
      item.classList.toggle('active', index === activeIndex);
    });
  }
  paginationItems.forEach((item, index) => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      if (index !== 0 && index !== paginationItems.length - 1) {
        updatePagination(index);
      }
    });
  });
  updatePagination(2);

  // --- SLIDER GIÁ FILTER ---
  var slider = document.getElementById('slider');
  var handleFrom = document.getElementById('handle-from');
  var handleTo = document.getElementById('handle-to');
  var sliderRange = document.getElementById('slider-range');
  var amountFrom = document.getElementById('amount-from');
  var amountTo = document.getElementById('amount-to');
  var filterForm = document.getElementById('filterForm');
  if (slider && handleFrom && handleTo && sliderRange && amountFrom && amountTo && filterForm) {
    var min = 0;
    var max = 10000000;
    var from = min;
    var to = max;
    var url = new URL(window.location.href);
    var priceFrom = parseInt(url.searchParams.get('price_from'));
    var priceTo = parseInt(url.searchParams.get('price_to'));
    if (!isNaN(priceFrom)) from = priceFrom;
    if (!isNaN(priceTo)) to = priceTo;
    function formatCurrency(value) {
      return value.toLocaleString('vi-VN') + 'đ';
    }
    function updateSlider() {
      var percentFrom = ((from - min) / (max - min)) * 100;
      var percentTo = ((to - min) / (max - min)) * 100;
      handleFrom.style.left = percentFrom + '%';
      handleTo.style.left = percentTo + '%';
      sliderRange.style.left = percentFrom + '%';
      sliderRange.style.width = (percentTo - percentFrom) + '%';
      amountFrom.textContent = formatCurrency(from);
      amountTo.textContent = formatCurrency(to);
    }
    function onDrag(handle, isFrom) {
      function move(e) {
        var rect = slider.getBoundingClientRect();
        var x = e.touches ? e.touches[0].clientX : e.clientX;
        var percent = Math.max(0, Math.min(1, (x - rect.left) / rect.width));
        var value = Math.round(min + percent * (max - min));
        if (isFrom) {
          if (value > to) value = to;
          from = value;
        } else {
          if (value < from) value = from;
          to = value;
        }
        updateSlider();
      }
      function up() {
        document.removeEventListener('mousemove', move);
        document.removeEventListener('mouseup', up);
        document.removeEventListener('touchmove', move);
        document.removeEventListener('touchend', up);
        var inputFrom = filterForm.querySelector('input[name="price_from"]');
        var inputTo = filterForm.querySelector('input[name="price_to"]');
        if (!inputFrom) {
          inputFrom = document.createElement('input');
          inputFrom.type = 'hidden';
          inputFrom.name = 'price_from';
          filterForm.appendChild(inputFrom);
        }
        if (!inputTo) {
          inputTo = document.createElement('input');
          inputTo.type = 'hidden';
          inputTo.name = 'price_to';
          filterForm.appendChild(inputTo);
        }
        inputFrom.value = from;
        inputTo.value = to;
        filterForm.submit();
      }
      document.addEventListener('mousemove', move);
      document.addEventListener('mouseup', up);
      document.addEventListener('touchmove', move);
      document.addEventListener('touchend', up);
    }
    handleFrom.addEventListener('mousedown', function(e) { e.preventDefault(); onDrag(handleFrom, true); });
    handleTo.addEventListener('mousedown', function(e) { e.preventDefault(); onDrag(handleTo, false); });
    handleFrom.addEventListener('touchstart', function(e) { e.preventDefault(); onDrag(handleFrom, true); });
    handleTo.addEventListener('touchstart', function(e) { e.preventDefault(); onDrag(handleTo, false); });
    updateSlider();
  }
});
