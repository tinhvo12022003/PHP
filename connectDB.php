<?php
// Thông tin kết nối MySQL
$servername = "127.0.0.1";
$username = "root";
$password = "tvo229033@gmail";
$database = "code";

// Tạo đối tượng mysqli và thiết lập kết nối
$mysqli = new mysqli($servername, $username, $password);

// Kiểm tra kết nối
if ($mysqli->connect_error) {
    die("Kết nối tới MySQL thất bại: " . $mysqli->connect_error);
}

// Tạo cơ sở dữ liệu mới
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if ($mysqli->query($sql) === true) {
    echo "Cơ sở dữ liệu $database đã được tạo thành công!";
} else {
    echo "Lỗi khi tạo cơ sở dữ liệu: " . $mysqli->error;
}

// Đóng kết nối$
$mysqli->close();
?>