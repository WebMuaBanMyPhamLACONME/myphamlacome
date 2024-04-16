<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Content/css/my.css">
</head>
<body>
<?php  
include("connect.php");

if(isset($_GET['trang'])){
    $page = $_GET['trang'];
} else {
    $page = '';
}

if($page == '' || $page == 1){
    $begin = 0;
} else {
    $begin = ($page * 3) - 3;
    if($begin < 0) {
        $begin = 0;
    }
}

$result = "SELECT TenSanPham, Gia, SoLuotXem, Hinh1, Soluong, SoLuongDaBan, Mota FROM SanPham ORDER BY SoLuongDaBan  DESC LIMIT $begin, 3";                                 
$result = $conn->query($result);
?>

<div class="container__sale">
    <div class="box"></div>
</div>
<div class="container__sale" >
    <h1 style="text-align: center;">Gợi ý mua sắm</h1>
    <div class="row_sale" > 
    

        <?php foreach ($result as $i) { ?>
            <div class="col-3 ">
                <div class="col_sale">
                    <img src="images/<?php echo $i["Hinh1"];?>" alt="<?php echo $i["TenSanPham"];?>" class="img_sale  zoom-in">
                    <div class="container__container-content">
                        <h3><?php echo $i["TenSanPham"];?></h3>
                        <p><i class="fa-solid fa-dollar-sign"></i> <span style="color: red"><?php echo number_format($i["Gia"], 0, ',', '.') ?> VNĐ</span></p>
                        <i class="fa-solid fa-eye"></i> <?php echo $i["SoLuotXem"];?></i>
                        <p class="item_price"><i class="fa-solid fa-truck-fast"></i> <?php echo $i["SoLuongDaBan"];?> (còn lại: <?php echo $i["Soluong"];?>)</p>
                        <a href="" style="display: block; text-align: center; margin-top: auto;" class="btn btn--dark">Chọn mua</a> 
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>