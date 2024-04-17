<?php
// Bao gồm tệp kết nối đến cơ sở dữ liệu
include('connect.php');

// Kiểm tra xem có dữ liệu được gửi từ biểu mẫu không
if(isset($_POST['submit'])){
    // Lấy dữ liệu từ biểu mẫu và xử lý để tránh các vấn đề bảo mật
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Xử lý ảnh đại diện
    $avatar = $_FILES['avatar']['name'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];
    $avatar_path = "uploads/".$avatar;

    // Di chuyển ảnh đại diện vào thư mục uploads
    move_uploaded_file($avatar_tmp, $avatar_path);

    // Lưu thông tin vào cơ sở dữ liệu
    $sql = "INSERT INTO nguoidung (Ten, Email, MaDangNhap, DiaChi, SDT, LoaiNguoiDung, MatKhau, AnhDaiDien) 
            VALUES ('$fullname', '$email', '$username', '$address', '$phone', 'khach_hang', '$password', '$avatar_path')";

    // Thực thi truy vấn và kiểm tra kết quả
    if(mysqli_query($conn, $sql)){
        echo "Đăng ký thành công!";
    } else{
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
