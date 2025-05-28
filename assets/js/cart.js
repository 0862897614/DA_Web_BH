// tăng giảm số lượng sản phẩm trong giỏ hàng
document.addEventListener("DOMContentLoaded", function() {
  initQuantityButtons();
  if (typeof initAddToCartButtons === 'function') initAddToCartButtons();
  openCart();
  closeCart();
  renderCart();
  bindCartEvents();
});

function initQuantityButtons() {
  const quantityWrappers = document.querySelectorAll(".info-price-quantity");
  quantityWrappers.forEach((wrapper) => {
    const input = wrapper.querySelector("input[type='number']");
    const btnUp = wrapper.querySelector(".quantity-cart__up");
    const btnDown = wrapper.querySelector(".quantity-cart__down");
    if (!input || !btnUp || !btnDown) return;
    btnUp.onclick = () => {
      let value = parseInt(input.value);
      const max = parseInt(input.max) || 99;
      if (value < max) input.value = value + 1;
    };
    btnDown.onclick = () => {
      let value = parseInt(input.value);
      const min = parseInt(input.min) || 1;
      if (value > min) input.value = value - 1;
    };
  });
}

// thêm sản phẩm vào giỏ hàng
function initAddToCartButtons() {
}

function getCart() {
  return JSON.parse(localStorage.getItem('cart')) || [];
}
function setCart(cart) {
  localStorage.setItem('cart', JSON.stringify(cart));
}
function findCartIndex(cart, item) {
  return cart.findIndex(i => i.title === item.title && i.size === item.size);
}
function addToCart(item) {
  let cart = getCart();
  const idx = findCartIndex(cart, item);
  if (idx > -1) {
    cart[idx].quantity += 1;
  } else {
    cart.push(item);
  }
  setCart(cart);
}
function updateCartQuantity(item, quantity) {
  let cart = getCart();
  const idx = findCartIndex(cart, item);
  if (idx > -1) {
    cart[idx].quantity = quantity;
    if (cart[idx].quantity < 1) cart[idx].quantity = 1;
    if (cart[idx].quantity > 99) cart[idx].quantity = 99;
    setCart(cart);
  }
}
function removeFromCart(item) {
  let cart = getCart();
  const idx = findCartIndex(cart, item);
  if (idx > -1) {
    cart.splice(idx, 1);
    setCart(cart);
  }
}
function renderCart() {
  let cart = getCart();
  const cartList = document.querySelector('.main-action');
  const cartCount = document.querySelectorAll('.number-cart');
  const totalPrice = document.querySelector('.total-price-cart strong');
  if (!cartList) return;
  cartList.innerHTML = cart.map(item => `
    <div class="item-product-cart">
      <div class="thumb-product-cart">
        <img src="${item.img}" alt="">
      </div>
      <div class="info-product-cart">
        <h3><a href="">${item.title}</a></h3>
        <div class="info-properties">
          <p class="properties-size">Size: <strong>${item.size}</strong></p>
        </div>
        <div class="info-price-mini">
          <div class="info-price-quantity">
            <div class="quantity-cart__down" data-title="${item.title}" data-size="${item.size}">-</div>
            <div class="input-wrapper">
              <input type="number" class="cart-quantity-input" value="${item.quantity}" min="1" max="99" />
            </div>
            <div class="quantity-cart__up" data-title="${item.title}" data-size="${item.size}">+</div>
          </div>
          <div class="price-cart-mini">
            <span>${item.price}</span>
          </div>
        </div>
      </div>
    </div>
  `).join('');
  // Cập nhật số lượng
  const totalCount = cart.reduce((sum, i) => sum + i.quantity, 0);
  cartCount.forEach(el => el.innerText = totalCount);
  // Cập nhật tổng tiền
  if (totalPrice) {
    let total = cart.reduce((sum, i) => sum + (parseInt(i.price.replace(/\D/g, '')) * i.quantity), 0);
    totalPrice.innerText = total.toLocaleString('vi-VN') + '₫';
  }
}
function showAddToCartPopup() {
  let popup = document.createElement('div');
  popup.className = 'add-cart-popup';
  popup.innerHTML = `
    <div class="popup-overlay"></div>
    <div class="popup-content">
      <div style="font-size:80px;text-align:center;margin-bottom:20px; color: #222;">
        <i class="bx bx-shopping-bag" style="font-size:80px;"></i>
      </div>
      <div style="font-size:24px;text-align:center; color: #222; font-weight:600;">THÊM VÀO GIỎ HÀNG THÀNH CÔNG !</div>
    </div>
  `;
  Object.assign(popup.style, {
    position: 'fixed', top: 0, left: 0, width: '100vw', height: '100vh', zIndex: 9999
  });
  const overlay = popup.querySelector('.popup-overlay');
  Object.assign(overlay.style, {
    position: 'absolute', top: 0, left: 0, width: '100vw', height: '100vh', background: 'rgba(0,0,0,0.5)', zIndex: 1
  });
  const content = popup.querySelector('.popup-content');
  Object.assign(content.style, {
    position: 'absolute', top: '50%', left: '50%', transform: 'translate(-50%, -50%)', background: '#fff', borderRadius: '16px', boxShadow: '0 8px 32px rgba(0,0,0,0.18)', padding: '48px 32px', zIndex: 2, minWidth: '350px', maxWidth: '90vw', display: 'flex', flexDirection: 'column', alignItems: 'center', justifyContent: 'center',
  });
  document.body.appendChild(popup);
  setTimeout(() => { popup.remove(); }, 1500);
}
function bindCartEvents() {
  // Đảm bảo chỉ add 1 lần
  if (bindCartEvents._added) return;
  bindCartEvents._added = true;
  document.body.addEventListener('click', function(e) {
    // Tăng số lượng
    if (e.target.classList.contains('quantity-cart__up')) {
      const item = {
        title: e.target.getAttribute('data-title'),
        size: e.target.getAttribute('data-size')
      };
      let cart = getCart();
      const idx = findCartIndex(cart, item);
      if (idx > -1) {
        cart[idx].quantity += 1;
        setCart(cart);
        renderCart();
      }
    }
    // Giảm số lượng hoặc xóa
    if (e.target.classList.contains('quantity-cart__down')) {
      const item = {
        title: e.target.getAttribute('data-title'),
        size: e.target.getAttribute('data-size')
      };
      let cart = getCart();
      const idx = findCartIndex(cart, item);
      if (idx > -1) {
        if (cart[idx].quantity > 1) {
          cart[idx].quantity -= 1;
        } else {
          cart.splice(idx, 1);
        }
        setCart(cart);
        renderCart();
      }
    }
  });
  // Sự kiện input: chỉ cập nhật localStorage
  document.body.addEventListener('input', function(e) {
    if (e.target.classList.contains('cart-quantity-input')) {
      const productElem = e.target.closest('.item-product-cart');
      if (!productElem) return;
      const title = productElem.querySelector('.info-product-cart h3 a').innerText;
      const size = productElem.querySelector('.properties-size strong').innerText;
      let value = parseInt(e.target.value);
      if (isNaN(value) || value < 1) value = 1;
      if (value > 99) value = 99;
      updateCartQuantity({ title, size }, value);
    }
  });
  // Sự kiện change: render lại giao diện
  document.body.addEventListener('change', function(e) {
    if (e.target.classList.contains('cart-quantity-input')) {
      renderCart();
    }
  });
}
function openCart() {
  // Đảm bảo chỉ add 1 lần
  if (openCart._added) return;
  openCart._added = true;
  // Chỉ bắt sự kiện click vào đúng icon giỏ hàng
  const cartIcon = document.querySelector('.icon4 > a.fa-shopping-bag');
  const cartTab = document.querySelector('.sub-action-cart');
  if (cartIcon && cartTab) {
    cartIcon.addEventListener('click', function(e) {
      e.preventDefault();
      cartTab.classList.add('open');
      setTimeout(() => {
        document.addEventListener('mousedown', handleClickOutsideCart);
      }, 0);
    });
  }
}
function closeCart() {
  // Đảm bảo chỉ add 1 lần
  if (closeCart._added) return;
  closeCart._added = true;
  document.body.addEventListener('click', function(e) {
    if (e.target.closest('.action-close')) {
      const cartTab = document.querySelector('.sub-action-cart');
      if (cartTab) {
        cartTab.classList.remove('open');
        document.removeEventListener('mousedown', handleClickOutsideCart);
      }
    }
  });
}
function handleClickOutsideCart(e) {
  const cartTab = document.querySelector('.sub-action-cart');
  const cartIcon = document.querySelector('.icon4');
  if (!cartTab.contains(e.target) && !cartIcon.contains(e.target)) {
    cartTab.classList.remove('open');
    document.removeEventListener('mousedown', handleClickOutsideCart);
  }
}

