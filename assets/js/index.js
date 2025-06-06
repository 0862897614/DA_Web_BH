document.addEventListener("DOMContentLoaded", () => {
  // Tắt tính năng lưu vị trí cuộn của trình duyệt
  if ("scrollRestoration" in history) {
    history.scrollRestoration = "manual";
  }

  // Đặt lại vị trí cuộn về đầu trang khi trang load
  window.scrollTo(0, 0);

  // Thiết lập nút cuộn lên đầu trang
  setupScrollToTop(".movetotop");

  // Khởi tạo slideshow
  initSlideshow();

  // Khởi tạo menu
  // initExclusiveHeadMenu();

  // Khởi tạo hàng sản phẩm
  initProductRows();

  // Khởi tạo slider tự động di chuyển
  initAutoSlider();

  // Khởi tạo bx-shopping-bag
  initShoppingBags();

  document.querySelectorAll(".home-new-prd").forEach((section) => {
    const tabs = section.querySelectorAll(".tab");
    const productLists = section.querySelectorAll(".product-list");
    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        tabs.forEach((t) => t.classList.remove("active"));
        tab.classList.add("active");
        productLists.forEach((list) => list.classList.remove("active"));
        const target = tab.getAttribute("data-target");
        const activeProductList = section.querySelector(`#${target}`);
        if (activeProductList) {
          activeProductList.classList.add("active");
        }
      });
    });
  });
});

// Hàm thiết lập nút cuộn lên đầu trang
function setupScrollToTop(selector) {
  const scrollToTopButton = document.querySelector(selector);

  if (scrollToTopButton) {
    scrollToTopButton.addEventListener("click", function (event) {
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  } else {
    console.error(`Element with selector "${selector}" not found.`);
  }
}

// Hàm khởi tạo slideshow
function initSlideshow() {
  let slideIndex = 1;

  const slideShowElements = {
    slides: document.getElementsByClassName("mySlides"),
    dots: document.getElementsByClassName("dot"),
  };

  function updateSlides(index, elements) {
    if (index > elements.slides.length) slideIndex = 1;
    if (index < 1) slideIndex = elements.slides.length;

    const offset = (slideIndex - 1) * -100;

    for (let i = 0; i < elements.slides.length; i++) {
      elements.slides[i].style.transform = `translateX(${offset}%)`;
    }

    for (let i = 0; i < elements.dots.length; i++) {
      elements.dots[i].className = elements.dots[i].className.replace(
        " active",
        ""
      );
    }

    elements.dots[slideIndex - 1].className += " active";
  }

  window.plusSlides = (n) => updateSlides((slideIndex += n), slideShowElements);
  window.currentSlide = (n) =>
    updateSlides((slideIndex = n), slideShowElements);
}

// Hàm khởi tạo menu
// function initExclusiveHeadMenu() {
//   const exclusiveHeadItems = document.querySelectorAll(".exclusive-head li");

//   exclusiveHeadItems.forEach((li) =>
//     li.addEventListener("click", () => {
//       exclusiveHeadItems.forEach((item) => item.classList.remove("active"));
//       li.classList.add("active");
//     })
//   );
// }

// Hàm khởi tạo hàng sản phẩm
function initProductRows() {
  const rows = document.querySelectorAll(".row-prd");

  rows.forEach((row) => {
    const products = row.querySelectorAll(".product");
    const btnRight = row.querySelector(".btn-right-prd");
    const btnLeft = row.querySelector(".btn-left-prd");
    const productsInView = 5;
    const gap = 10;
    let currentIndex = 0;
    const maxIndex = Math.max(0, products.length - productsInView);

    const updateProductPosition = () => {
      // Lấy lại width mỗi lần dịch chuyển để tránh lỗi khi ảnh chưa load xong
      const productWidth = products[0].getBoundingClientRect().width;
      const totalShift = currentIndex * (productWidth + gap);
      products.forEach((product) => {
        product.style.transform = `translateX(-${totalShift}px)`;
      });
      updateButtonVisibility();
    };

    const updateButtonVisibility = () => {
      if (products.length <= productsInView) {
        btnLeft.style.display = "none";
        btnRight.style.display = "none";
      } else {
        btnLeft.style.display = currentIndex > 0 ? "block" : "none";
        btnRight.style.display = currentIndex < maxIndex ? "block" : "none";
      }
    };

    if (btnRight) {
      btnRight.addEventListener("click", () => {
        if (currentIndex < maxIndex) currentIndex++;
        updateProductPosition();
      });
    }
    if (btnLeft) {
      btnLeft.addEventListener("click", () => {
        if (currentIndex > 0) currentIndex--;
        updateProductPosition();
      });
    }

    updateProductPosition();
  });
}

// Hàm khởi tạo slider tự động di chuyển
function initAutoSlider() {
  const slider = document.querySelector(".owl-stage-outer");
  const items = document.querySelectorAll(".item-slider-ads");
  const nextBtn = document.querySelector(".owl-next");
  const prevBtn = document.querySelector(".owl-prev");
  let currentIndex = 0;
  const itemWidth = items[0].offsetWidth + 30;
  const totalItems = items.length - 1;

  const moveSlider = (index) => {
    slider.style.transform = `translateX(-${index * itemWidth}px)`;
  };

  const autoSlide = () => {
    currentIndex = (currentIndex + 1) % totalItems;
    moveSlider(currentIndex);
  };

  let autoSlideInterval = setInterval(autoSlide, 4000);

  const resetAutoSlide = () => {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(autoSlide, 4000);
  };

  nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % totalItems;
    moveSlider(currentIndex);
    resetAutoSlide();
  });

  prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    moveSlider(currentIndex);
    resetAutoSlide();
  });
}

// Overplay effect cho menu
const overlay = document.querySelector(".overlay");
const menuList = document.querySelectorAll(".menu ul li, .others ul .icon1");

menuList.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    overlay.style.opacity = "1";
    overlay.style.pointerEvents = "auto";
  });
  item.addEventListener("mouseleave", () => {
    overlay.style.opacity = "0";
    overlay.style.pointerEvents = "none";
  });
});




