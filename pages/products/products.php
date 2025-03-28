<?php
require_once __DIR__ . '/../../controllers/ProductController.php';
require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../includes/navbar.php';

$productController = new ProductController();
$products = $productController->index();

if (!is_iterable($products)) {
    die("Lỗi: Không thể lấy dữ liệu sản phẩm.");
}
?>

<!-- Hero Banner -->
<section class="py-5" style="background: url('../../assets/images/product-images/banner-orange.jpg') no-repeat right center/cover; background-color: #f6f7fb;">
  <div class="container py-5">
    <h1 class="fw-bold text-dark">Tất cả sản phẩm</h1>
    <p class="text-muted col-md-6">Khám phá tất cả các sản phẩm đang có tại nhà thuốc Medxstore.</p>
  </div>
</section>

<!-- Danh sách sản phẩm -->
<div class="container py-5">
  <?php if (!empty($products)): ?>
    <div class="row">
      <?php foreach ($products as $sp): 
        $donviList = $productController->getDonViTheoThuoc($sp['id']); ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm border-0 rounded-4 product-card" style="transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer;">
            <div class="card-img-top-wrapper position-relative overflow-hidden" style="height: 230px;">
              <img src="/MedXtorePharmacy/assets/images/product-images/<?= htmlspecialchars($sp['hinhanh'] ?? 'default.png') ?>"
                   class="card-img-top w-100 h-100 object-fit-contain p-2"
                   alt="<?= htmlspecialchars($sp['ten_thuoc']) ?>">
            </div>

            <div class="card-body text-center">
              <h5 class="card-title fw-semibold mb-1"><?= htmlspecialchars($sp['ten_thuoc']) ?></h5>
              <p class="text-muted small mb-1">Loại: <?= htmlspecialchars($sp['ten_loai']) ?></p>
              <p class="text-muted mb-2" style="min-height: 40px;">
                <?= mb_strimwidth(strip_tags($sp['mota']), 0, 80, "...") ?>
              </p>
              <?php if (!empty($donviList)): ?>
                <select class="form-select form-select-sm mb-2 select-donvi" data-product-id="<?= htmlspecialchars($sp['id']) ?>">
                      <?php foreach ($donviList as $dv): ?>
                        <?php
                          $donviId = htmlspecialchars($dv['donvi_id'] ?? '');
                          $tenDonvi = htmlspecialchars($dv['ten_donvi'] ?? 'Không rõ');
                          $gia = isset($dv['gia']) ? number_format($dv['gia'], 0, ',', '.') : '0';
                        ?>
                        <option value="<?= $donviId ?>" data-gia="<?= htmlspecialchars($dv['gia']) ?>">
                          <?= $tenDonvi ?> - <?= $gia ?> VNĐ
                        </option>
                      <?php endforeach; ?>
                    </select>

                <p class="fw-bold text-danger fs-6 mb-3">
                  <span class="gia-hienthi" id="gia-<?= $sp['id'] ?>">
                    <?= number_format($donviList[0]['gia'], 0, ',', '.') ?> VNĐ
                  </span>
                </p>
              <?php endif; ?>

              <button class="btn btn-primary px-4 py-2 rounded-pill fw-semibold shadow add-to-cart-btn" 
                      data-id="<?= $sp['id'] ?>" 
                      data-name="<?= htmlspecialchars($sp['ten_thuoc']) ?>">
                <i class="bi bi-cart-plus me-1"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <div class="text-center my-5">
      <img src="/MedXtorePharmacy/assets/images/empty.png" alt="empty" style="width: 100px;">
      <p class="text-muted">Hiện tại chưa có sản phẩm nào.</p>
    </div>
  <?php endif; ?>
</div>

<!-- Giỏ hàng mini -->
<div id="cart-mini" class="position-fixed bottom-0 end-0 m-4 bg-white shadow-lg p-3 rounded-4" style="width: 280px; z-index: 999; display: none;">
  <h6 class="fw-bold mb-3">🛒 Giỏ hàng</h6>
  <ul id="cart-items" class="list-group mb-3"></ul>
  <button class="btn btn-sm btn-outline-danger w-100" onclick="clearCart()">Xóa tất cả</button>
</div>

<style>
.card:hover {
  transform: scale(1.03);
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}
.add-to-cart-btn:hover {
  transform: scale(1.05) translateY(-2px);
  background-color: #fbae3c;
  color: #fff;
}
.card-img-top-wrapper {
  background: #f9f9f9;
}
</style>

<script>
const cart = [];

// Cập nhật giá khi chọn đơn vị
const selects = document.querySelectorAll('.select-donvi');
selects.forEach(select => {
  select.addEventListener('change', function () {
    const selected = this.options[this.selectedIndex];
    const gia = selected.dataset.gia;
    const id = this.dataset.productId;
    document.getElementById('gia-' + id).innerText = Number(gia).toLocaleString('vi-VN') + ' VNĐ';
  });
});

// Thêm vào giỏ hàng
const addBtns = document.querySelectorAll('.add-to-cart-btn');
addBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const id = btn.dataset.id;
    const name = btn.dataset.name;
    const select = document.querySelector('.select-donvi[data-product-id="' + id + '"]');
    const donviText = select.options[select.selectedIndex].text;
    const item = name + ' - ' + donviText;
    cart.push(item);
    updateCart();
  });
});

function updateCart() {
  const cartBox = document.getElementById('cart-mini');
  const cartList = document.getElementById('cart-items');
  cartList.innerHTML = '';
  cart.forEach(item => {
    const li = document.createElement('li');
    li.className = 'list-group-item py-1';
    li.innerText = `✔️ ${item}`;
    cartList.appendChild(li);
  });
  cartBox.style.display = 'block';
}

function clearCart() {
  cart.length = 0;
  updateCart();
  document.getElementById('cart-items').innerHTML = '<li class="text-muted">Giỏ hàng trống</li>';
}
</script>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>