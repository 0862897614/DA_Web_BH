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
  color: #1877f3;
  font-size: 2rem;
  margin-bottom: 18px;
}
.page-help .desc {
  color: #666;
  margin-bottom: 24px;
}
.page-help .mess-btn {
  background: #1877f3;
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
.page-help .mess-btn:hover {
  background: #145db2;
}
</style>
<div class="page-help">
  <h2>Messenger Facebook</h2>
  <div class="desc">Kết nối với chúng tôi qua Facebook Messenger để được hỗ trợ nhanh nhất.</div>
  <a href="https://m.me/yourpage" target="_blank">
    <button class="mess-btn"><i class="fa fa-facebook-messenger"></i> Chat Messenger</button>
  </a>
</div>
<?php include 'footer.php'; ?>
