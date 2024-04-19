<!DOCTYPE html>
<html>
<head>
    <title>LANCÔME PARIS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .header, .sub-header, .sub-header-2 {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: white;
        }
        .header .left, .header .center, .header .right,
        .sub-header .left, .sub-header .center, .sub-header .right,
        .sub-header-2 .left, .sub-header-2 .center, .sub-header-2 .right {
            display: flex;
            align-items: center;
        }
        .header .left a, .header .right a,
        .sub-header .left a, .sub-header .right a,
        .sub-header-2 .left a, .sub-header-2 .right a {
            margin-right: 20px;
            color: black; /* Đảm bảo màu văn bản không bị ảnh hưởng bởi Bootstrap */
        }
        .header .left a:hover, .header .right a:hover,
        .sub-header .left a:hover, .sub-header .right a:hover,
        .sub-header-2 .left a:hover, .sub-header-2 .right a:hover {
            color: red; /* Màu chữ khi hover */
        }
        .sub-header-2 .right input[type="text"] {
            font-size: 16px;
            border: 1px solid transparent;
            transition: border-color 0.3s ease;
            border-radius: 20px; /* Độ bo tròn, có thể điều chỉnh theo ý của bạn */
            padding: 5px 10px; /* Điều chỉnh padding để làm cho ô tìm kiếm đẹp hơn */
            outline: none; /* Loại bỏ viền khi focus */
        }
        .sub-header-2 .right input[type="text"]:focus {
            border-color: red; /* Màu viền khi focus */
        }
        .sub-header-2 .right input[type="text"]:focus,
        .sub-header-2 .right input[type="text"]:hover {
        border-color: red; /* Màu viền khi focus và hover */
        }
        .sub-header-2 a{
            font-size: 16px;
            color: black;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="left">
            <a href="#">Danh sách của hàng</a>
            <a href="#">Liên hệ</a>
        </div>
        <div class="center">
            <img src="../Content/Content2/images/logo2.png" alt="LANCÔME PARIS">
        </div>
        <div class="right">
            <a href="#">Email đăng ký</a>
            <a href="#">Tài khoản của tôi</a>
            <a href="#">Giỏ hàng (0)</a>
        </div>
    </header>
    <nav class="sub-header-2">
        <a href="#">ƯU ĐÃI THÁNG 4</a>
        <a href="#">BEST SELLER</a>
        <a href="#">DƯỠNG DA</a>
        <a href="#">NƯỚC HOA</a>
        <a href="#">TRANG ĐIỂM</a>
        <!-- Thêm các mục dưỡng da, nước hoa, trang điểm ... vào đây -->
        <div class="right">
            <input type="text" placeholder="TÌM KIẾM">
        </div>
    </nav>
</body>
</html>
