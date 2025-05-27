<?php include 'header.php'; ?>
<style>
.page-help {
  max-width: 500px;
  margin: 60px auto 40px auto;
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.08);
  padding: 40px 32px;
  text-align: center;
}
.page-help h2 {
  color: #388e3c;
  font-size: 2rem;
  margin-bottom: 18px;
}
.page-help .desc {
  color: #666;
  margin-bottom: 24px;
}
.page-help input, .page-help button {
  padding: 10px 16px;
  border-radius: 6px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
  font-size: 1rem;
}
.page-help button {
  background: #388e3c;
  color: #fff;
  border: none;
  font-weight: 600;
  margin-left: 8px;
  transition: background 0.2s;
}
.page-help button:hover {
  background: #2e7031;
}
.page-help .result {
  margin-top: 18px;
  color: #222;
  font-size: 1.1rem;
}
</style>
<div class="page-help">
  <h2>Tra cứu đơn hàng</h2>
  <div class="desc">Nhập mã đơn hàng để kiểm tra trạng thái đơn hàng của bạn.</div>
  <form id="orderLookupForm" autocomplete="off">
    <input type="text" id="orderCode" placeholder="Nhập mã đơn hàng..." required>
    <button type="submit"><i class="fa fa-search"></i> Tra cứu</button>
  </form>
  <div class="result" id="orderResult"></div>
</div>
<script>
document.getElementById('orderLookupForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var code = document.getElementById('orderCode').value.trim();
  var result = document.getElementById('orderResult');
  // Demo: bạn có thể thay bằng ajax thực tế
  if(code === '123456') {
    result.innerHTML = 'Đơn hàng <b>#123456</b> đang được giao tới bạn!';
  } else if(code) {
    result.innerHTML = 'Không tìm thấy đơn hàng với mã <b>#' + code + '</b>.';
  } else {
    result.innerHTML = '';
  }
});
</script>
<?php include 'footer.php'; ?>
