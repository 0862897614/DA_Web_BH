<?php
require_once __DIR__ . '/db.php';
?>
  <!-- home-new-product 1-->
    <section class="home-new-prd" data-id="1">
      <div class="main-content">
        <div class="title-section">THÁNG CỦA NÀNG - SALE 30% ALL ITEMS</div>
        <div class="exclusive-tabs">
          <div class="exclusive-head">
            <ul>
              <li class="tab active" data-target="ivy-moda-1">
                IVY moda
              </li>
              <li class="tab" data-target="ivy-men-1">
                IVY men
              </li>
            </ul>
          </div>
          <div class="exclusive-content">
            <!-- ivy-moda-1 -->
            <div id="ivy-moda-1" class="row-prd product-list active">
          <?php
          $sql = "SELECT * FROM tbl_product WHERE category_id = 25 ORDER BY product_id ASC LIMIT 7";
          $result = $db->select($sql);
          if ($result) {
            while ($row = $result->fetch_assoc()) {
              $colors = array_filter(explode(',', $row['product_color']));
              $sizes = isset($row['product_size']) && $row['product_size'] ? array_filter(explode(',', $row['product_size'])) : ['s','m','l','xl','xxl'];
          ?>
              <div class="product">
                <div class="info-ticket ticket-news">new</div>
              <div class="badget ivymoda"><span>-30<span>%</span></span></div>
                <div class="thumb_prd">
              <a href="product.php?id=<?php echo $row['product_id']; ?>">
                <img src="assets/img/<?php echo $row['product_img']; ?>" alt="" class="owl-lazy" />
                <?php if (!empty($row['product_img_hover'])): ?>
                <img src="assets/img/<?php echo $row['product_img_hover']; ?>" alt="" class="hover-owl-lazy" />
                <?php endif; ?>
                  </a>
                </div>
                <div class="info_prd">
                  <div class="list-color">
                    <ul>
                      <?php foreach ($colors as $i => $color): ?>
                      <li<?php if ($i == 0) echo ' class="checked"'; ?>>
                        <a href="">
                          <img src="./assets/img/<?php echo trim($color); ?>" alt="" />
                        </a>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <?php if ($row['product_favourite']): ?>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                    <?php endif; ?>
                  </div>
                  <h3 class="title-prd">
                <a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></a>
                  </h3>
                  <div class="price-prd">
                <span><?php echo number_format($row['product_price_new']); ?>đ</span>
                <span><?php echo number_format($row['product_price']); ?>đ</span>
                    <div class="bx bx-shopping-bag">
                      <div class="list-size">
                        <ul>
                      <?php foreach ($sizes as $size): ?>
                      <li><button><?php echo htmlspecialchars($size); ?></button></li>
                      <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php }} ?>
              <div class="btns">
                <div class="btn btn-left-prd">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="btn btn-right-prd">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </div>
            </div>
        <!-- ivy-men-1 -->
            <div id="ivy-men-1" class="row-prd product-list">
          <?php
          $sql = "SELECT * FROM tbl_product WHERE category_id = 26 ORDER BY product_id ASC LIMIT 7";
          $result = $db->select($sql);
          if ($result) {
            while ($row = $result->fetch_assoc()) {
              $colors = array_filter(explode(',', $row['product_color']));
              $sizes = isset($row['product_size']) && $row['product_size'] ? array_filter(explode(',', $row['product_size'])) : ['s','m','l','xl','xxl'];
          ?>
              <div class="product">
                <div class="badget badget_02"><span>-50<span>%</span></span></div>
                <div class="thumb_prd">
              <a href="product.php?id=<?php echo $row['product_id']; ?>">
                <img src="assets/img/<?php echo $row['product_img']; ?>" alt="" class="owl-lazy" />
                <?php if (!empty($row['product_img_hover'])): ?>
                <img src="assets/img/<?php echo $row['product_img_hover']; ?>" alt="" class="hover-owl-lazy" />
                <?php endif; ?>
                  </a>
                </div>
                <div class="info_prd">
                  <div class="list-color">
                    <ul>
                  <?php foreach ($colors as $i => $color): ?>
                  <li<?php if ($i == 0) echo ' class="checked"'; ?>>
                        <a href="">
                          <img src="./assets/img/<?php echo trim($color); ?>" alt="" />
                        </a>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <?php if ($row['product_favourite']): ?>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                    <?php endif; ?>
                  </div>
                  <h3 class="title-prd">
                <a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></a>
                  </h3>
                  <div class="price-prd">
                <span><?php echo number_format($row['product_price_new']); ?>đ</span>
                <span><?php echo number_format($row['product_price']); ?>đ</span>
                <div class="bx bx-shopping-bag">
                  <div class="list-size">
                    <ul>
                      <?php foreach ($sizes as $size): ?>
                      <li><button><?php echo htmlspecialchars($size); ?></button></li>
                      <?php endforeach; ?>
                    </ul>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          <?php }} ?>
              <div class="btns">
                <div class="btn btn-left-prd">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="btn btn-right-prd">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </div>
            </div>
            <div class="link-prd">
              <a href="./category/product-new.php" class="all-prd">Xem tất cả</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- home-new-product 2-->
    <section class="home-new-prd" data-id="2">
      <div class="main-content">
        <div class="title-section">FALL - WINTER COLLECTION 2025 | SALE 30% ALL ITEMS</div>
        <div class="exclusive-tabs">
             <div class="exclusive-head">
            <ul>
              <li class="tab active" data-target="ivy-moda-2">
                IVY moda
              </li>
              <li class="tab" data-target="ivy-men-2">
                IVY men
              </li>
            </ul>
          </div>
          </div>
          <div class="exclusive-content">
             <!-- ivy-moda-2 -->
            <div id="ivy-moda-2" class="row-prd product-list active">
        <?php
        $sql = "SELECT * FROM tbl_product WHERE category_id = 25 ORDER BY product_id ASC LIMIT 7 OFFSET 7";
        $result = $db->select($sql);
        if ($result) {
          while ($row = $result->fetch_assoc()) {
            $colors = array_filter(explode(',', $row['product_color']));
            $sizes = isset($row['product_size']) && $row['product_size'] ? array_filter(explode(',', $row['product_size'])) : ['s','m','l','xl','xxl'];
        ?>
              <div class="product">
                <div class="info-ticket seller">* Best Seller</div>
                <div class="ivymoda badget"><span>-30<span>%</span></span></div>
                <div class="thumb_prd">
            <a href="product.php?id=<?php echo $row['product_id']; ?>">
              <img src="assets/img/<?php echo $row['product_img']; ?>" alt="" class="owl-lazy" />
                <?php if (!empty($row['product_img_hover'])): ?>
                <img src="assets/img/<?php echo $row['product_img_hover']; ?>" alt="" class="hover-owl-lazy" />
                <?php endif; ?>
                  </a>
                </div>
                <div class="info_prd">
                  <div class="list-color">
                    <ul>
                      <?php foreach ($colors as $i => $color): ?>
                      <li<?php if ($i == 0) echo ' class="checked"'; ?>>
                        <a href="">
                          <img src="./assets/img/<?php echo trim($color); ?>" alt="" />
                        </a>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <?php if ($row['product_favourite']): ?>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                    <?php endif; ?>
                  </div>
                  <h3 class="title-prd">
              <a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></a>
                  </h3>
                  <div class="price-prd">
              <span><?php echo number_format($row['product_price_new']); ?>đ</span>
              <span><?php echo number_format($row['product_price']); ?>đ</span>
                    <div class="bx bx-shopping-bag">
                      <div class="list-size">
                        <ul>
                    <?php foreach ($sizes as $size): ?>
                    <li><button><?php echo htmlspecialchars($size); ?></button></li>
                    <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php }} ?>
              <div class="btns">
                <div class="btn btn-left-prd">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="btn btn-right-prd">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </div>
            </div>
             <!-- ivy-men-2 -->
            <div id="ivy-men-2" class="row-prd product-list">
        <?php
        $sql = "SELECT * FROM tbl_product WHERE category_id = 26 ORDER BY product_id ASC LIMIT 7 OFFSET 7";
        $result = $db->select($sql);
        if ($result) {
          while ($row = $result->fetch_assoc()) {
            $colors = array_filter(explode(',', $row['product_color']));
            $sizes = isset($row['product_size']) && $row['product_size'] ? array_filter(explode(',', $row['product_size'])) : ['s','m','l','xl','xxl'];
        ?>
              <div class="product">
                <div class="badget badget_02"><span>-50<span>%</span></span></div>
                <div class="thumb_prd">
            <a href="product.php?id=<?php echo $row['product_id']; ?>">
              <img src="assets/img/<?php echo $row['product_img']; ?>" alt="" class="owl-lazy" />
                <?php if (!empty($row['product_img_hover'])): ?>
                <img src="assets/img/<?php echo $row['product_img_hover']; ?>" alt="" class="hover-owl-lazy" />
                <?php endif; ?>
                  </a>
                </div>
                <div class="info_prd">
                  <div class="list-color">
                    <ul>
                  <?php foreach ($colors as $i => $color): ?>
                  <li<?php if ($i == 0) echo ' class="checked"'; ?>>
                        <a href="">
                          <img src="./assets/img/<?php echo trim($color); ?>" alt="" />
                        </a>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <?php if ($row['product_favourite']): ?>
                    <div class="favourite">
                      <i class="fa-regular fa-heart"></i>
                    </div>
                    <?php endif; ?>
                  </div>
                  <h3 class="title-prd">
              <a href="product.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></a>
                  </h3>
                  <div class="price-prd">
              <span><?php echo number_format($row['product_price_new']); ?>đ</span>
              <span><?php echo number_format($row['product_price']); ?>đ</span>
                    <div class="bx bx-shopping-bag">
                      <div class="list-size">
                        <ul>
                    <?php foreach ($sizes as $size): ?>
                    <li><button><?php echo htmlspecialchars($size); ?></button></li>
                    <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <?php }} ?>
              <div class="btns">
                <div class="btn btn-left-prd">
                  <i class="fa-solid fa-arrow-left-long"></i>
                </div>
                <div class="btn btn-right-prd">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </div>
            </div>
            <div class="link-prd">
              <a href="./category/product-seller.php" class="all-prd">Xem tất cả</a>
          </div>
        </div>
      </div>
    </section>
