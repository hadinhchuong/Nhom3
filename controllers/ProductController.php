<?php
require_once __DIR__ . '/../models/Product.php';

class ProductController {
    private $model;

    public function __construct() {
        $this->model = new Product();
    }

    // Lấy danh sách tất cả thuốc
    public function index() {
        return $this->model->getAll();
    }

    // Lấy chi tiết 1 thuốc theo ID
    public function getById($id) {
        return $this->model->getById($id);
    }

    // Lấy danh sách đơn vị + giá theo thuốc
    public function getDonViTheoThuoc($thuoc_id) {
        return $this->model->getDonViByThuoc($thuoc_id);
    }

    // Lọc thuốc theo tên, loại, hạn sử dụng
    public function filter($search = '', $loai = '', $hsd = '') {
        return $this->model->filterProducts($search, $loai, $hsd);
    }
}
