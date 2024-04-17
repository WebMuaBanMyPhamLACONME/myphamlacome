<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    // Lắng nghe sự kiện click cho các liên kết trang
    $(".list_trang a").on("click", function(event) {
        // Ngăn chặn hành động mặc định của liên kết
        event.preventDefault();
        
        // Lấy href của liên kết đã click
        var href = $(this).attr("href");
        
        // Gửi yêu cầu AJAX để tải nội dung của trang mới
        $.ajax({
            url: href,
            method: "GET",
            success: function(response) {
                // Cập nhật nội dung của trang hiện tại với nội dung mới
                $("body").html(response);
            },
            error: function(xhr, status, error) {
                console.error("Lỗi khi tải trang mới:", error);
            }
        });
    });
});
</script>

<body>
    
   
<?php include 'connect.php'; 
?>
    <div style="clear:both"></div>

    <?php
        $sql_trang = mysqli_query($conn, "SELECT * FROM SanPham"); 
        $row_count = mysqli_num_rows($sql_trang);
        $trang = ceil($row_count/2);
    ?>
<div class="trang">
<?php
            $trang_hien_tai = isset($_GET['trang']) ? $_GET['trang'] : 1;

            $soTrangHienThi = min(3, $trang); 

            ?>
            <div id="trang" class="trang">
                <ul class="list_trang">
                    <?php
                    for ($i = 1; $i <= $soTrangHienThi; $i++) {
                        if ($i == $trang_hien_tai) {
                            echo '<li><a style="background-color: #dcd5d5; color: black;" class="current-page page-item">' . $i . '</a></li>';
                        } else {
                            echo '<li><a href="index.php?trang=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
                </div>
</body>
</html>