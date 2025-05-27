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
  color: #1976d2;
  font-size: 2rem;
  margin-bottom: 18px;
}
.page-help .desc {
  color: #666;
  margin-bottom: 24px;
}
.page-help .chat-btn {
  background: #1976d2;
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
.page-help .chat-btn:hover {
  background: #1565c0;
}
</style>
<div class="page-help">
  <h2>Live Chat</h2>
  <div class="desc">Nhân viên tư vấn sẽ hỗ trợ bạn trực tiếp qua chat.</div>
  <a href="https://zalo.me/123456789" target="_blank">
    <button class="chat-btn"><i class="fa fa-comments"></i> Bắt đầu chat Zalo</button>
  </a>
</div>
<?php include 'footer.php'; ?>
