<?php
include('connect.php');

if(isset($_POST['submit'])){
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Kiểm tra xem người dùng đã chọn tệp ảnh chưa
    if(isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK){
        // Xử lý ảnh đại diện
        $avatar = $_FILES['avatar']['name'];
        $avatar_tmp = $_FILES['avatar']['tmp_name'];
        $avatar_path = "uploads/" . $avatar;

        // Di chuyển ảnh đại diện vào thư mục uploads
        move_uploaded_file($avatar_tmp, $avatar_path);
    } else {
        // Nếu không có ảnh đại diện được chọn, gán một giá trị mặc định
        $avatar_path = "uploads/default.jpg"; // Thay đổi default.jpg thành đường dẫn của ảnh mặc định của bạn
    }

    $sql = "INSERT INTO nguoidung (Ten, Email, MaDangNhap, DiaChi, SDT, LoaiNguoiDung, MatKhau, AnhDaiDien) 
            VALUES ('$fullname', '$email', '$username', '$address', '$phone', 'khach_hang', '$password', '$avatar_path')";

    if(mysqli_query($conn, $sql)){
        echo "Đăng ký thành công!";
    } else{
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>