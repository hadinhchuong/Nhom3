<?php include_once('../includes/ad-header.php'); ?>
<?php include_once('../includes/ad-sidebar.php'); ?>
<!-- Main Content -->
<div class="main-content">
    <!-- Revenue Chart Card -->
    <div class="revenue-card mt-4">
      <div class="revenue-card-header">
        <h4 class="mb-0">Báo Cáo Doanh Thu</h4>
        <div class="filter-buttons">
          <button class="btn btn-sm btn-outline-light me-2">7 Ngày</button>
          <button class="btn btn-sm btn-outline-light me-2">30 Ngày</button>
          <button class="btn btn-sm btn-outline-light">Năm</button>
        </div>
      </div>
      <div class="revenue-stats">
        <div class="revenue-stat">
          <small class="text-muted">Tổng Doanh Thu</small>
          <h5 class="text-primary">1,245,000 đ</h5>
        </div>
        <div class="revenue-stat">
          <small class="text-muted">Đơn Hàng</small>
          <h5 class="text-success">256</h5>
        </div>
        <div class="revenue-stat">
          <small class="text-muted">Trung Bình/Đơn</small>
          <h5 class="text-warning">4,860 đ</h5>
        </div>
      </div>
      <div class="chart-container">
        <canvas id="revenueChart"></canvas>
      </div>
    </div>

    <!-- Dashboard Stats -->
    <div class="row g-4 mt-4">
      <div class="col-md-3">
        <div class="dashboard-card">
          <div class="card-body">
            <div class="card-icon bg-primary text-white"><i class="fas fa-pills fa-2x"></i></div>
            <div><h6 class="text-muted mb-2">Tổng Số Thuốc</h6><h4 class="fw-bold mb-0">1,245</h4></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card">
          <div class="card-body">
            <div class="card-icon bg-success text-white"><i class="fas fa-shopping-cart fa-2x"></i></div>
            <div><h6 class="text-muted mb-2">Đơn Hàng Hôm Nay</h6><h4 class="fw-bold mb-0">56</h4></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card">
          <div class="card-body">
            <div class="card-icon bg-warning text-white"><i class="fas fa-users fa-2x"></i></div>
            <div><h6 class="text-muted mb-2">Khách Hàng Mới</h6><h4 class="fw-bold mb-0">23</h4></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="dashboard-card">
          <div class="card-body">
            <div class="card-icon bg-danger text-white"><i class="fas fa-coins fa-2x"></i></div>
            <div><h6 class="text-muted mb-2">Doanh Thu Hôm Nay</h6><h4 class="fw-bold mb-0">256,450 đ</h4></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('../includes/ad-footer.php'); ?>