<?php include_once('../includes/ad-header.php'); ?>
<?php include_once('../includes/ad-sidebar.php'); ?>

<!-- Main Content -->
<div class="main-content">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Quản Lý Thuốc</h3>
    <button class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#addMedicineModal">
      <i class="fas fa-plus me-2"></i>Thêm Thuốc
    </button>
  </div>

  <!-- Search and Filter -->
  <div class="card p-4 shadow-sm mb-4">
    <form class="row g-3">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Tìm theo tên thuốc...">
      </div>
      <div class="col-md-3">
        <select class="form-select">
          <option selected>Loại thuốc</option>
          <option>Viên</option>
          <option>Nước</option>
          <option>Tiêm</option>
        </select>
      </div>
      <div class="col-md-3">
        <input type="date" class="form-control" placeholder="Hạn sử dụng trước">
      </div>
      <div class="col-md-2">
        <button class="btn btn-outline-primary w-100">Lọc</button>
      </div>
    </form>
  </div>

  <!-- Medicine Table -->
  <div class="card shadow-sm fade-in">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tên thuốc</th>
            <th scope="col">Loại</th>
            <th scope="col">Đơn vị</th>
            <th scope="col">Giá</th>
            <th scope="col">Hạn sử dụng</th>
            <th scope="col">Tồn kho</th>
            <th scope="col" class="text-end">Hành động</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Paracetamol</td>
            <td>Viên</td>
            <td>Hộp</td>
            <td>25,000đ</td>
            <td>2025-12-31</td>
            <td>120</td>
            <td class="text-end">
              <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Amoxicillin</td>
            <td>Viên</td>
            <td>Vỉ</td>
            <td>15,000đ</td>
            <td>2026-06-15</td>
            <td>300</td>
            <td class="text-end">
              <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
              <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Medicine Modal -->
  <div class="modal fade" id="addMedicineModal" tabindex="-1" aria-labelledby="addMedicineLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addMedicineLabel">Thêm Thuốc Mới</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Tên thuốc</label>
                <input type="text" class="form-control" required>
              </div>
              <div class="col-md-3">
                <label class="form-label">Loại</label>
                <select class="form-select">
                  <option>Viên</option>
                  <option>Nước</option>
                  <option>Tiêm</option>
                </select>
              </div>
              <div class="col-md-3">
                <label class="form-label">Đơn vị</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Giá (VNĐ)</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Hạn sử dụng</label>
                <input type="date" class="form-control">
              </div>
              <div class="col-md-4">
                <label class="form-label">Số lượng tồn</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-12">
                <label class="form-label">Mô tả</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include_once('../includes/ad-footer.php'); ?>