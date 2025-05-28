// document.addEventListener("DOMContentLoaded", () => {
//   // Lấy tất cả các nút "Thêm vào giỏ"
//   const addToCartButtons = document.querySelectorAll(".add-to-cart-detail");

//   // Lấy phần tử hiển thị số lượng giỏ hàng
//   const numberCart = document.querySelector(".number-cart");

//   // Gán sự kiện click cho từng nút
//   addToCartButtons.forEach((button) => {
//     button.addEventListener("click", (event) => {
//       event.preventDefault(); // Ngăn chặn hành vi mặc định nếu cần

//       // Lấy giá trị hiện tại trong span (nếu không phải số thì mặc định là 0)
//       let currentCount = parseInt(numberCart.textContent) || 0;

//       // Tăng số lượng lên 1
//       currentCount += 1;

//       // Cập nhật lại nội dung trong span
//       numberCart.textContent = currentCount;
//     });
//   });
// });
