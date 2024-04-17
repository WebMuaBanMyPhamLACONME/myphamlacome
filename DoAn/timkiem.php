<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php   
        include("index.php");
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Tạo câu truy vấn tìm kiếm
$sql = "SELECT * FROM SanPham WHERE TenSanPham LIKE '%$keyword%'";

// Thực hiện truy vấn
$result = $conn->query($sql);

// Kiểm tra số lượng kết quả trả về 
if ($result->num_rows > 0) {
    // Xuất kết quả của mỗi hàng
    while($row = $result->fetch_assoc()) {
        echo "Tên sản phẩm: " . $row["TenSanPham"]. " - Giá: " . $row["Gia"]. "<br>";
    }
} else {
    echo "Không tìm thấy sản phẩm nào";
}

?>
</ul>
</body>
</html>