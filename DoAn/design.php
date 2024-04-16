<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
 <?php   include("connect.php");

$result = "SELECT TenUuDai, HinhAnh, Mota FROM UuDai LIMIT  3";                                 
$result = $conn->query($result);
?>
<h1 style="text-align: center;margin-top: 50px">Đặc quyền khi mua sắm tại Lacome</h1>   
<div class="row_sale">  
    <?php
    while ($row = $result->fetch_assoc()) {
    ?>
    <div style="margin-top: 50px" class="col-3">
        <div class="col_sale2">
            <img src="images/<?php echo $row["HinhAnh"];?>" alt="<?php echo $row["TenUuDai"];?>" class="img_sale zoom-in2">
                <div  class="container__container-content2" >
            <div>
                <h3><?php echo $row["TenUuDai"];?></h3>
                <p><span><?php echo $row["Mota"];?></span></p>
                <a href="#" class="btn btn--dark">Mua ngay</a>  
            </div>
        </div>
        </div>
    </div>
    <?php
    }
    ?>
    
</div>


</head>
<body>
<div class="banner">
  <div class="icon">
  <i class="fa-solid fa-truck"></i>
    <p>100% Nhập khẩu chính hãng từ Pháp</p>
  </div>
  <div class="icon">
  <i class="fa-solid fa-users"></i>
    <p>Nhận mẫu thử miễn phí</p>
  </div>
  <div class="icon">
  <i class="fa-solid fa-bag-shopping"></i>
    <p>Dịch vụ chăm sóc da độc quyền</p>
  </div>
  <div class="icon">
  <i class="fa-solid fa-gift"></i>
    <p>Quà tặng kèm & Ưu đãi đặc biệt</p>
  </div>

</div>
</body>
</html>