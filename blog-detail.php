<?php 
    require_once('php/connect.php');

    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' AND `status` = 'true' ";
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
    }else{
        header('Location: blog.php');
    }

    $sql_RAND = "SELECT * FROM `articles`WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND);

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta property="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $row['subject']?></title>


        <!-- Search Engine -->
        <meta name="title" content="<?php echo $row['subject']?>">
        <meta name="description" content="<?php echo $row['sub_title']?>">
        <meta name="keywords" content="html , css , javascript">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Appstory">
        <meta name="image" content="https://images.unsplash.com/photo-1542838687-936f417d2f37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="Web Site Mockup">
        <meta itemprop="description" content="<?php echo $row['sub_title']?>">
        <meta itemprop="image" content="https://images.unsplash.com/photo-1542838687-936f417d2f37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="<?php echo $row['subject']?>">
        <meta name="og:description" content="<?php echo $row['sub_title']?>">
        <meta name="og:image" content="https://images.unsplash.com/photo-1542838687-936f417d2f37?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80">
        <meta name="og:url" content="https://testcourse-8a2b1.firebaseapp.com">
        <meta name="og:site_name" content="https://testcourse-8a2b1.firebaseapp.com">
        <meta name="og:type" content="website">
    
        <link rel="apple-touch-icon" sizes="180x180" href="assets\image\favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets\image\favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets\image\favicons/favicon-16x16.png">
        <link rel="manifest" href="assets\image\favicons/site.webmanifest">
        <link rel="mask-icon" href="assets\image\favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets\image\favicons/favicon.ico">
        <meta property="msapplication-TileColor" content="#da532c">
        <meta property="msapplication-config" content="assets\image\favicons/browserconfig.xml">
        <meta property="theme-color" content="#ffffff">

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
    <header class="jarallax" data-spreed="0.5" style="background-image: url(<?php echo $base_path_blog.$row['image']?>);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row['subject']?></h1>
            <p class="lead"><?php echo $row['sub_title']?></p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
             <?php echo $row['detail']?>
                    
            </div>
            <div class="col-12 text-right">
                <hr>
                <div class="pw-server-widget" data-id="wid-g6i3usej"></div>
                <p class="text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y");?></p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                <?php while($row_RAND = $result_RAND->fetch_assoc()){ ?>
                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['id']?>" class="warpper-card-img">
                            <img src="<?php echo $base_path_blog.$row_RAND['image']?>" class="card-img-top" alt="ImgBlog">
                            </a>
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row_RAND['subject']?></h5>
                            <p class="card-text"><?php echo $row_RAND['sub_title']?></p>
                            </div>
                            <div class="p-3">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['id']?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                <?php } ?>
                </div>
            </div>
            <div class="col-12">
                <div class="fb-comments" data-width="100%" data-href="http://localhost/blog/blog-detail.php?id_mockupssd=<?php echo $row['id']?>" data-numposts="5"></div>
                <div id="fb-root"></div>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-QAidMFAV5kvtGQLiiOc2VOrjyT8Uln8&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            nav: false,
            dots:true,
            responsive:{
                0:{
                items:1
            },
                600:{
                items:2
            },
                1000:{
                items:3
            }
        }
        });
    });

   
    
  //              DO NOT IMPLEMENT                //
  //       this code through the following        //
  //                                              //
  //   Floodlight Pixel Manager                   //
  //   DCM Pixel Manager                          //
  //   Any system that places code in an iframe   //
    (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
          + '.po.st/static/v4/post-widget.js#publisherKey=rqg5msq5bao05bb4ctlf';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
     })();

    </script>
</body>
</html>