<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Include Bootstrap CSS and jQuery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

    <!-- Banner -->
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-id" data-slide-to="1"></li>
            <li data-target="#carousel-id" data-slide-to="2"></li>
        </ol>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            <div class="item active">
                <img style="width: 2000px; height:529px" src="images/banner5.jpg" alt="Banner 1">
            </div>

            <div class="item">
                <img style="width: 2000px; height:529px" src="images/banner3.jpg" alt="Banner 2">
            </div>
            <div class="item">
                <img style="width: 2000px; height: 529px" src="images/lancome-lazada-khuyen-mai-10.10.jpg"
                    alt="Banner 3">
            </div>
        </div>

        <!-- Carousel Controls -->
        <a class="left carousel-control" href="#carousel-id" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

</body>

</html>