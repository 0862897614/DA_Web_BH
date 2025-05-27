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
  color: #b71c1c;
  font-size: 2rem;
  margin-bottom: 18px;
}
.page-help .hotline-number {
  font-size: 2.2rem;
  font-weight: bold;
  color: #222;
  margin-bottom: 10px;
  letter-spacing: 2px;
}
.page-help .desc {
  color: #666;
  margin-bottom: 24px;
}
.page-help .call-btn {
  background: #b71c1c;
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 12px 32px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s;
  margin-top: 10px;
}
.page-help .call-btn:hover {
  background: #d32f2f;
}
</style>
<div class="page-help">
  <h2>Hotline hỗ trợ</h2>
  <div class="hotline-number">1900 1234</div>
  <div class="desc">Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7 qua số điện thoại trên.</div>
  <a href="tel:19001234"><button class="call-btn"><i class="fa fa-phone"></i> Gọi ngay</button></a>
</div>
<?php include 'footer.php'; ?>
