<?php
require_once __DIR__ . '/../models/Inventory.php';

class InventoryController {
    private $model;

    public function __construct() {
        $this->model = new Inventory();
    }

    // Lấy toàn bộ danh sách kho
    public function getAll() {
        return $this->model->getAllInventory();
    }

    // Danh sách thuốc để hiển thị trong select
    public function getThuocList() {
        return $this->model->getThuocList();
    }

    // Danh sách đơn vị tính
    public function getDonViList() {
        return $this->model->getDonViList();
    }

    // Danh sách nhà cung cấp
    public function getNhaCungCapList() {
        return $this->model->getNhaCungCapList();
    }

    /**
     * Xử lý nhập kho + cập nhật giá bán tương ứng trong bảng thuoc_donvi
     */
    public function importInventory($data) {
        $thuoc_id       = $data['thuoc_id'];
        $donvi_id       = $data['donvi_id'];
        $nhacungcap_id  = $data['nhacungcap_id'];
        $gia_nhap       = $data['gia'];
        $soluong        = $data['soluong'];
        $hansudung      = $data['hansudung'];
        $capnhat        = date('Y-m-d H:i:s');

        // ✅ Bước 1: Lưu vào bảng khohang (giá nhập, số lượng, hạn...)
        $this->model->insertInventory(
            $thuoc_id,
            $donvi_id,
            $nhacungcap_id,
            $gia_nhap,
            $soluong,
            $hansudung,
            $capnhat
        );

        // ✅ Bước 2: Tính giá bán (lợi nhuận 30%)
        $tyle_loinhuan = 0.3;
        $gia_ban = ceil($gia_nhap * (1 + $tyle_loinhuan));

        // ✅ Bước 3: Thêm hoặc cập nhật giá bán trong bảng thuoc_donvi
        $this->model->updateOrInsertGiaBan($thuoc_id, $donvi_id, $gia_ban);
    }
}
