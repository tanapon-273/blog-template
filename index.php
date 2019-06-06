<?php 
    require_once('php/connect.php');
    $sql = "SELECT * FROM `articles`WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Site Mockup</title>
    <?php include_once'includes/meta.php' ?>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

    <!-- Section Navbar -->

    <?php include_once('includes/navbar.php'); ?>

    <!-- Section Carousel -->

    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1548782044-05435564e221?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Appstory Studio</h1>
                        <p class="lead">สังคมของการเขียนเว็บไซต์</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1548781833-d0a123f6d537?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Appstory Studio</h1>
                        <p class="lead">สังคมของการเขียนเว็บไซต์ (Bootstrap 4)</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1548805685-f9dbcff435e0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Appstory Studio</h1>
                        <p class="lead">สังคมของการเขียนเว็บไซต์ (Angular JS)</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </section>

    <!-- Section Hope -->

    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="border-short-bottom">ความคาดหวังของผู้เรียน</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </section>

    <!-- Section Blog -->
    <section class="container">
            <h1 class="border-short-bottom text-center">Blog</h1>
        <div class="row">

        <?php  while($row = $result->fetch_assoc()){ ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
                <a href="blog-detail.php?id=<?php echo $row['id']?>" class="warpper-card-img">
                <img src="<?php echo $base_path_blog.$row['image']?>" class="card-img-top" alt="ImgBlog">
                </a>
                <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject']?></h5>
                <p class="card-text"><?php echo $row['sub_title']?></p>
                </div>
                <div class="p-3">
                    <a href="blog-detail.php?id=<?php echo $row['id']?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                </div>
            </div>
            </section>
        <?php }?>
        </div>
    </section>

    <!-- Section Footer -->

    <?php include_once('includes/footer.php'); ?>

    <!-- Section On To Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-QAidMFAV5kvtGQLiiOc2VOrjyT8Uln8&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>