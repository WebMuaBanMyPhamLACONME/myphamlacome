<!-- nếu mở file csdl thì khỏi mở cái này -->

<?php
    include 'test.php';
   

    $sql1 = "CREATE TABLE NguoiDung
    (
        MaNguoiDung INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Ten VARCHAR(256),
        Email VARCHAR(50) NOT NULL,
        MaDangNhap VARCHAR(50)  NULL,
        DiaChi VARCHAR(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
        SDT CHAR(10),
        LoaiNguoiDung INT(11),
        MatKhau VARCHAR(50) NOT NULL,
        AnhDaiDien VARCHAR(50)
  
       



    )";
     if( $conn->query($sql1) == TRUE) {
        echo "Tạo bảng thành công";
        }
        else{
            echo "tạo bảng thất bại";
        } 

   $sql2 = "CREATE TABLE DatHang
    (
        MaDatHang INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        MaNguoiDung INT(11),    
        NgayDat DATETIME,
        NgayGiao DATETIME,
        TrangThaiThanhToan CHAR (50)
    )";
    if( $conn->query($sql2) == TRUE) {
        echo "Tạo bảng thành công";
        }
        else{
            echo "tạo bảng thất bại";
        } 


        $sql3 = "CREATE  TABLE ChiTietDonHang(
             MaChiTietDatHang INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             MaSanPham INT(10),
             TenSanPham VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
             GiaSanPham INT(20),
             SoLuongMua INT(11),
             MaDatHang  INT(2),
             HinhAnhSanPham VARCHAR(50)

        )";

if( $conn->query($sql3) == TRUE) {
    echo "Tạo bảng thành công";
    }
    else{
        echo "tạo bảng thất bại";
    } 

      $sql4 = "CREATE  TABLE LoaiNguoiDung (
             MaNguoiDung INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             Ten CHAR(10)
           

        )";

if( $conn->query($sql4) == TRUE) {
    echo "Tạo bảng thành công";
    }
    else{
        echo "tạo bảng thất bại";
    } 

        $sql5 = "CREATE  TABLE DanhMuc(
            MaDanhMuc INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            TenDanhMuc VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            KichHoat Char(50)

        )";

if( $conn->query($sql5) == TRUE) {
    echo "Tạo bảng thành công";
    }
    else{
        echo "tạo bảng thất bại";
    } 
   $sql5 = "CREATE  TABLE SanPham(
            MaSanPham INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            TenSanPham VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
            Gia INT(11),
            SoLuotXem Int(12),
            Hinh1 VARCHAR(50),
            Hinh2 VARCHAR(50),
            Hinh3 VARCHAR(50),
            SoLuong INT(11),
            SoLuongDaBan INT(11),
            MoTa VARCHAR(290),
            MaDanhMuc int(11)


        )";

if( $conn->query($sql5) == TRUE) {
    echo "Tạo bảng thành công";
    }
    else{
        echo "tạo bảng thất bại";
    } 



?>
