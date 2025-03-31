<?php
// Cấu hình cơ bản của trang web
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Định nghĩa đường dẫn gốc (URL)
$base_url = '/MedXtorePharmacy'; // Điều chỉnh theo đường dẫn thực tế

// Định nghĩa các đường dẫn khác
$config = [
    'base_url' => $base_url,
    'pages_url' => $base_url . '/pages',
    'admin_url' => $base_url . '/admin',
    'assets_url' => $base_url . '/assets',
];

// Hàm tiện ích để tạo URL
function url($path = '') {
    global $config;
    return $config['base_url'] . $path;
}

// Hàm tạo URL đến trang
function page_url($page = '') {
    global $config;
    return $config['pages_url'] . '/' . $page;
}

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";  // Để trống nếu không có mật khẩu
$dbname = "pharmacy";

try {
    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        throw new Exception("Kết nối thất bại: " . $conn->connect_error);
    }

    // Đặt charset là utf8mb4
    $conn->set_charset("utf8mb4");
} catch (Exception $e) {
    // Xử lý lỗi kết nối nhưng không dừng trang
    error_log("Database connection error: " . $e->getMessage());
    $conn = null; // Đặt conn là null để code khác có thể kiểm tra
}
?>