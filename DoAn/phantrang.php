<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
   
   .trang {
        position: absolute;
       
        left: 50%;
        transform: translateX(-50%);
    }
    .list_trang {
        list-style: none;
        padding: 0;
        text-align: center; /* Canh giữa các phần tử trong ul */
    }
    .list_trang li {
        display: inline-block; /* Hiển thị các mục li trên cùng một hàng */
        margin: 0 5px; /* Khoảng cách giữa các mục li */
    }


    ul.list_trang{
        padding: 0;
        margin: 0;
        list-style: none;
    }
    ul.list_trang li a{
        float:left;
        padding: 5px 13px;
        margin: 5px;
        background-color: #212529;
       color :white;
       display:block;
       color :white;
        text-decoration:none;
        text-align:center;
        text-decoration:none;
    }
    
</style>
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
            <div class="trang">
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
</body>
</html>