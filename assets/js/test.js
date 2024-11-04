// document.addEventListener("DOMContentLoaded", function () {
//   const filterButton = document.querySelector(".but_filter_product");
//   const removeFilterButton = document.querySelector(".but_filter_remove");
//   const products = document.querySelectorAll(".item-cat-product");

//   // Hàm lấy các giá trị đã chọn
//   function getSelectedValues(selector) {
//     return Array.from(document.querySelectorAll(selector))
//       .filter((input) => input.checked)
//       .map((input) => input.value);
//   }

//   // Hàm lọc sản phẩm
//   function filterProducts() {
//     const selectedSizes = getSelectedValues("input[name='att_size[]']:checked");
//     const selectedColors = getSelectedValues(
//       "input[name='att_color[]']:checked"
//     );
//     const selectedDiscount = getSelectedValues(
//       "input[name='att_discount']:checked"
//     )[0];
//     const selectedMaterials = getSelectedValues(
//       "input[name='chat_lieu[]']:checked"
//     );

//     const priceRange = {
//       min: parseInt(
//         document.getElementById("amount-from").textContent.replace(/đ|,/g, "")
//       ),
//       max: parseInt(
//         document.getElementById("amount-to").textContent.replace(/đ|,/g, "")
//       ),
//     };

//     products.forEach((product) => {
//       const productSize = Array.from(
//         product.querySelectorAll(".list-size button")
//       ).map((button) => button.textContent.trim().toLowerCase());
//       const productColor = Array.from(
//         product.querySelectorAll(".list-coor img")
//       ).map((img) =>
//         img.getAttribute("src").split("/").pop().replace(".png", "")
//       );
//       const productPrice = parseInt(
//         product
//           .querySelector(".price-product span")
//           .textContent.replace(/đ|,/g, "")
//       );
//       const productDiscount = product.dataset.discount || "";
//       const productMaterial = Array.from(
//         product.querySelectorAll(".item-title")
//       ).map((span) => span.textContent.trim());

//       let match = true;

//       // Kiểm tra size
//       if (
//         selectedSizes.length &&
//         !selectedSizes.some((size) => productSize.includes(size))
//       ) {
//         match = false;
//       }

//       // Kiểm tra màu
//       if (
//         selectedColors.length &&
//         !selectedColors.some((color) => productColor.includes(color))
//       ) {
//         match = false;
//       }

//       // Kiểm tra giá
//       if (productPrice < priceRange.min || productPrice > priceRange.max) {
//         match = false;
//       }

//       // Kiểm tra mức chiết khấu
//       if (selectedDiscount && selectedDiscount !== productDiscount) {
//         match = false;
//       }

//       // Kiểm tra chất liệu
//       if (
//         selectedMaterials.length &&
//         !selectedMaterials.some((material) =>
//           productMaterial.includes(material)
//         )
//       ) {
//         match = false;
//       }

//       // Hiển thị hoặc ẩn sản phẩm dựa trên kết quả lọc
//       product.style.display = match ? "block" : "none";
//     });
//   }

//   // Bắt sự kiện khi bấm nút "Lọc"
//   filterButton.addEventListener("click", filterProducts);

//   // Bắt sự kiện khi bấm nút "Bỏ lọc"
//   removeFilterButton.addEventListener("click", () => {
//     products.forEach((product) => {
//       product.style.display = "block";
//     });

//     // Reset các lựa chọn
//     document
//       .querySelectorAll("input[type='checkbox'], input[type='radio']")
//       .forEach((input) => (input.checked = false));
//     document.getElementById("amount-from").textContent = "0đ";
//     document.getElementById("amount-to").textContent = "10,000,000đ";
//   });
// });
