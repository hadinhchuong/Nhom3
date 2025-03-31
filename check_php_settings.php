<?php
// Kiểm tra các thiết lập và extensions của PHP
echo "<h2>Kiểm tra thiết lập PHP</h2>";
echo "PHP Version: " . phpversion() . "<br>";
echo "OpenSSL enabled: " . (extension_loaded('openssl') ? "Yes" : "No") . "<br>";
echo "Socket enabled: " . (extension_loaded('sockets') ? "Yes" : "No") . "<br>";
echo "SMTP functions available: " . (function_exists('mail') ? "Yes" : "No") . "<br>";

// Kiểm tra các thư viện PHPMailer
echo "<h2>Kiểm tra thư viện PHPMailer</h2>";
$phpmailer_path = __DIR__ . '/libraries/PHPMailer/src/PHPMailer.php';
$phpmailer_exception_path = __DIR__ . '/libraries/PHPMailer/src/Exception.php';
$phpmailer_smtp_path = __DIR__ . '/libraries/PHPMailer/src/SMTP.php';

echo "PHPMailer class exists: " . (file_exists($phpmailer_path) ? "Yes" : "No") . "<br>";
echo "PHPMailer Exception exists: " . (file_exists($phpmailer_exception_path) ? "Yes" : "No") . "<br>";
echo "PHPMailer SMTP exists: " . (file_exists($phpmailer_smtp_path) ? "Yes" : "No") . "<br>";

// Kiểm tra kết nối SMTP
echo "<h2>Kiểm tra kết nối SMTP</h2>";
$smtp_host = 'smtp.gmail.com';
$smtp_port = 587;

echo "Kiểm tra kết nối đến: $smtp_host:$smtp_port<br>";

$connection = @fsockopen($smtp_host, $smtp_port, $errno, $errstr, 5);
if ($connection) {
    echo "Kết nối SMTP thành công!<br>";
    fclose($connection);
} else {
    echo "Không thể kết nối đến SMTP: $errstr ($errno)<br>";
}

// Hiển thị đường dẫn cho debugging
echo "<h2>Thông tin đường dẫn</h2>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Current Script Path: " . __FILE__ . "<br>";
echo "Current Directory: " . __DIR__ . "<br>";

// Kiểm tra cài đặt PHP
echo "<h2>Các thiết lập PHP liên quan</h2>";
echo "allow_url_fopen: " . ini_get('allow_url_fopen') . "<br>";
echo "display_errors: " . ini_get('display_errors') . "<br>";
echo "error_reporting: " . ini_get('error_reporting') . "<br>";
echo "error_log: " . ini_get('error_log') . "<br>";
?>