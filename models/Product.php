<?php
require_once __DIR__ . '/../config/database.php';

class Product {
    private $conn;
    private $table = 'thuoc';

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Lấy tất cả sản phẩm + loại
    public function getAll() {
        $query = "SELECT t.*, l.ten_loai 
                  FROM {$this->table} t
                  LEFT JOIN loai_thuoc l ON t.loai_id = l.id
                  ORDER BY t.id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy chi tiết thuốc theo ID
    public function getById($id) {
        $query = "SELECT t.*, l.ten_loai 
                  FROM {$this->table} t
                  LEFT JOIN loai_thuoc l ON t.loai_id = l.id
                  WHERE t.id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Lấy đơn vị tính + giá của thuốc
    public function getDonViByThuoc($thuoc_id) {
        $query = "SELECT dv.id, dv.ten_donvi, td.gia
                  FROM thuoc_donvi td
                  JOIN donvi dv ON td.donvi_id = dv.id
                  WHERE td.thuoc_id = ?
                  ORDER BY dv.id ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([$thuoc_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lọc thuốc theo tên, loại, hạn sử dụng
    public function filterProducts($search = '', $loai = '', $hsd = '') {
        $query = "SELECT 
                    t.id, 
                    t.ten_thuoc, 
                    t.mota,                       -- ✅ Thêm dòng này
                    t.hinhanh, 
                    l.ten_loai, 
                    dv.ten_donvi, 
                    td.gia, 
                    COALESCE(SUM(k.soluong), 0) AS soluong,
                    MAX(k.hansudung) AS hansudung
                  FROM thuoc t
                  LEFT JOIN loai_thuoc l ON t.loai_id = l.id
                  JOIN thuoc_donvi td ON t.id = td.thuoc_id
                  JOIN donvi dv ON td.donvi_id = dv.id
                  LEFT JOIN khohang k 
                    ON t.id = k.thuoc_id AND td.donvi_id = k.donvi_id";
    
        $params = [];
        $conditions = [];
    
        if (!empty($search)) {
            $conditions[] = "t.ten_thuoc LIKE ?";
            $params[] = "%$search%";
        }
    
        if (!empty($loai)) {
            $conditions[] = "l.ten_loai = ?";
            $params[] = $loai;
        }
    
        if (!empty($hsd)) {
            $conditions[] = "k.hansudung <= ?";
            $params[] = $hsd;
        }
    
        if (!empty($conditions)) {
            $query .= " WHERE " . implode(" AND ", $conditions);
        }
    
        $query .= " GROUP BY t.id, td.donvi_id ORDER BY t.id DESC";
    
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    
}
