<?php
// Đảm bảo config được load
include_once(__DIR__ . '/config.php');

// Include functions.php nếu cần
if (file_exists(__DIR__ . '/functions.php')) {
    include_once(__DIR__ . '/functions.php');
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?php echo page_url('home.php'); ?>">MED<span style="color:#FBAE3C">XTORE</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link active" href="<?php echo page_url('home.php'); ?>">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page_url('products/products.php'); ?>">All Products</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page_url('about.php'); ?>">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo page_url('blog.php'); ?>">Blogs</a></li>
      </ul>
      
      <div class="d-flex">
        <?php if(isset($_SESSION['user_id'])): ?>
          <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="userDropdown" 
                    data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle me-1"></i> <?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'Tài khoản'; ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li><a class="dropdown-item" href="<?php echo page_url('profile.php'); ?>">Hồ sơ cá nhân</a></li>
              <li><a class="dropdown-item" href="<?php echo page_url('orders.php'); ?>">Lịch sử đơn hàng</a></li>
              <?php if(isset($_SESSION['user_role']) && $_SESSION['user_role'] == 1): ?>
                <li><a class="dropdown-item" href="<?php echo url('/admin/dashboard.php'); ?>">Quản trị viên</a></li>
              <?php endif; ?>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php echo $base_url; ?>/pages/logout.php">Đăng xuất</a></li>
            </ul>
          </div>
          <a href="<?php echo page_url('cart.php'); ?>" class="btn btn-primary ms-2">
            <i class="bi bi-cart"></i> Giỏ hàng
          </a>
        <?php else: ?>
          <a href="<?php echo page_url('login.php'); ?>" class="btn btn-outline-primary me-2">Đăng nhập</a>
          <a href="<?php echo page_url('register.php'); ?>" class="btn btn-primary">Đăng ký</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>