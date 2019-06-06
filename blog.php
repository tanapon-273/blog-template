<?php 
    require_once('php/connect.php');

    $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
    $sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
    $result = $conn->query($sql);
    if(!$result){
        header('Location: blog.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blog</title>
        <?php include_once'includes/meta.php' ?>

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Section Navbar -->

    <?php include_once('includes/navbar.php'); ?>

    <!-- Section Page Title -->
    <header class="jarallax" data-spreed="0.5" style="background-image: url(https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">บทความ</h1>
            <p class="lead">สังคมของการเขียนเว็บไซต์</p>
        </div>
    </header>


    <!-- Section Blog -->
    <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">   
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active': ''?>">ทั้งหมด</button>
                    </a>
                    <a href="blog.php?tag=html">  
                        <button class="btn btn-primary <?php echo $tag == 'html' ? 'active': ''?>">HTML</button>
                    </a>
                    <a href="blog.php?tag=css">
                    <button class="btn btn-primary <?php echo $tag == 'css' ? 'active': ''?>">CSS</button>
                    </a>
                    <a href="blog.php?tag=javascript">
                    <button class="btn btn-primary <?php echo $tag == 'javascript' ? 'active': ''?>">JavaScript</button>
                    </a>
                    <a href="blog.php?tag=php">
                    <button class="btn btn-primary <?php echo $tag == 'php' ? 'active': ''?>">PHP</button>
                    </a>
                    <a href="blog.php?tag=mysql">
                    <button class="btn btn-primary <?php echo $tag == 'mysql' ? 'active': ''?>">MySQL</button>
                    </a>
                </div>
            </div>

        </div>

        <div class="row">
            <?php 
            if($result->num_rows){
                while($row = $result->fetch_assoc()){
            ?>
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
            <?php 
                }
            } else{
            ?>

            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>
            <?php }?>
        </div>
    </section>

    <!-- Section Footer -->

    <?php include_once('includes/footer.php'); ?>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-QAidMFAV5kvtGQLiiOc2VOrjyT8Uln8&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>