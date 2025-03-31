<?php require_once('../admin/admin-auth.php'); ?>
<!-- Sidebar -->
<div class="sidebar">
  <div class="sidebar-logo text-center py-3">
    <h4 class="fw-bold mb-0">MedxtorePhamarcy</h4>
  </div>

  <div class="sidebar-menu">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>" href="index.php">
          <i class="fas fa-chart-pie"></i> Tổng Quan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'manage-products.php' ? 'active' : '' ?>" href="manage-products.php">
          <i class="fas fa-pills"></i> Quản Lý Thuốc
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Đơn Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-users"></i> Khách Hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-file-invoice"></i> Hóa Đơn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'import-inventory.php' ? 'active' : '' ?>" href="import-inventory.php">
          <i class="fas fa-truck-loading"></i> Nhập Kho
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'manage-inventory.php' ? 'active' : '' ?>" href="manage-inventory.php">
          <i class="fas fa-warehouse"></i> Kho Thuốc
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/MedXtorePharmacy/pages/home.php" target="_blank">
          <i class="fas fa-globe"></i> Xem Trang Người Dùng
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i> Báo Cáo</a>
      </li>
    </ul>
  </div>
</div>
