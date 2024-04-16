<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lacome</title>
    <link href="Content/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="Content/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="Content/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="Content/css2/style.css" rel='stylesheet' type='text/css' />
    <link href="Content/Content2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/Content2/css/vendor.css" rel="stylesheet" />
    <link rel="stylesheet" href="my.css">
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords); ?>" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="Content/font/fontawesome-free-6.3.0-web/css/all.css">
    <!-- start menu -->
    <script src="Content/js/bootstrap.min.js"></script>
    <!-- slide -->
    <!-- animation-effect -->
    <link href="Content/css/animate.min.css" rel="stylesheet">
    <script src="Content/js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="Content/Content2/fonts/fontawesome-free-6.3.0-web">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Thêm thư viện ResponsiveSlides -->
    <script src="https://cdn.jsdelivr.net/responsiveslides/1.55/responsiveslides.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- //animation-effect -->
</head>

<body>
   
    <!--header-->
    <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                        <img src="Content/Content2/images/logo2.png" />
                    </div>
                    <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                        <div class="cart box_1">
                            <a href="#">
                                <h3>

                                    <img src="Content/images/cart.png" alt="" />
                                </h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i
                                class="glyphicon glyphicon-search"> </i> </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
                                 <div> <?php include 'banner.php'; ?></div>
                                 <div class="container">
            <div class="head-top">
                                <div class="n-avigation">
                                    <nav class="navbar nav_bottom" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                                        <div class="navbar-header nav_2">
                                                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                                                                data-target="#bs-megadropdown-tabs">
                                                                <span class="sr-only">Toggle navigation</span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                                <span class="icon-bar"></span>
                                                            </button>
                                                            <a class="navbar-brand" href="#"></a>
                                                        </div>
                                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                                            <ul class="nav navbar-nav nav_1" style="display: inline; padding: 0;">
                                                                <li style="display: inline;"><a href="#"
                                                                        style="text-decoration:none; display: inline-block; padding: 10px;">Trang
                                                                        chủ</a></li>
                                                                <li style="display: inline;"><a href="#"
                                                                        style="text-decoration:none; display: inline-block; padding: 10px;">Sản phẩm</a>
                                                                </li>
                                                                <li style="display: inline;"><a href="login.php"
                                                                        style="text-decoration:none; display: inline-block; padding: 10px;">Đăng
                                                                        nhập</a>
                                                                </li>
                                                                <li style="display: inline;"><a href="#"
                                                                        style="text-decoration:none; display: inline-block; padding: 10px;">Đăng kí</a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.navbar-collapse -->
                                    </nav>
                                  </div>
                                                     <div? class="clearfix"> </div>
                                                                    <!---pop-up-box---->
                                                                                                    <link href="Content/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                                                                                                    <script src="Content/js/jquery.magnific-popup.js" type="text/javascript"></script>
                                                                                                    <!---//pop-up-box---->
                                                                                                    <div id="small-dialog" class="mfp-hide">
                                                                                                        <div class="search-top">
                                                                                                            <div class="login">
                                                                                                                <form action="#" method="get">
                                                                                                                    <input type="submit" value="">
                                                                                                                    <input type="text" name="keyword" value="Nhập vào từ khóa..." onfocus="this.value = '';"
                                                                                                                        onblur="if (this.value == '') {this.value = '';}">
                                                                                                                </form>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                        <script>
                                                                                        $(document).ready(function() {
                                                                                            $('.popup-with-zoom-anim').magnificPopup({
                                                                                                type: 'inline',
                                                                                                fixedContentPos: false,
                                                                                                fixedBgPos: true,
                                                                                                overflowY: 'auto',
                                                                                                closeBtnInside: true,
                                                                                                preloader: false,
                                                                                                midClick: true,
                                                                                                removalDelay: 300,
                                                                                                mainClass: 'my-mfp-zoom-in'
                                                                                            });
                                                                                        });
                                                                                        </script>
                                                                                        <!---->
                                                                                    </div?>
                        </div>
                        <div? class="clearfix"> </div>

                        <?php include 'sanphambanchay.php'; ?>
                        <!-- Footer -->
                        <?php include 'phantrang.php'; ?>
                        <?php include 'design.php';?>
 
                        <?php include 'footer.php'; ?>

    <script src="Content/js/notify.min.js"></script>
    <script src="Scripts/jquery.signalR-2.4.2.min.js"></script>
    <script src="signalr/hubs" type="text/javascript"></script>
    <link href="Content/css/chatbox.css" rel="stylesheet" />
    <script src="Content/js/chatbox.js"></script>
</body>

</html>