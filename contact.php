<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>
        <?php include_once'includes/meta.php' ?>

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        
</head>
<body>

    <!-- Section Navbar -->

    <?php include_once('includes/navbar.php'); ?>

    <!-- Section Page Title -->
    <header class="jarallax" data-spreed="0.5" style="background-image: url(https://images.unsplash.com/photo-1474403078171-7f199e9d1335?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1351&q=80);">
            <div class="page-image">
                <h1 class="display-4 font-weight-bold">ข้อมูลการติดต่อ</h1>
                <p class="lead">Appstiry Studio</p>
            </div>
    </header>

    <!-- Section Blog -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">สงขลา หาดใหญ่ 90110</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">(+66)99-9999-999</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope fa-4x py-2 text-info" aria-hidden="true"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p class="card-text">example@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">แบบฟอร์มติดต่อเรา</div>
                        <form method="post" action="php/contact.php">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="ชื่อของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์ของคุณ</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์ของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมลล์</label>
                                    <input type="email" id="email" name="email" class="form-control" required placeholder="example@gmail.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">ข้อความของคุณ</label>
                                <textarea id="message" name="message" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                            </div>
                            <div id="recaptcha-wrapper" class="text-center my-2">
                                <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LcDd48UAAAAADt_rpUB3nu1EyXXntNpvRG7m0oh"></div>
                            </div>
                            <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Section Footer -->

    <?php include_once('includes/footer.php'); ?>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-QAidMFAV5kvtGQLiiOc2VOrjyT8Uln8&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
    $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();
        function recaptchaCallback(){
            $('#btn-submit').removeAttr('disabled');
           
        }

    </script>
</body>
</html>