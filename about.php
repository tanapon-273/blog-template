<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
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
    
    <header class="jarallax" data-spreed="0.5" style="background-image: url(https://images.unsplash.com/photo-1548735349-105ae412cd63?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">เกี่ยวกับเรา</h1>
            <p class="lead">สังคมของการเขียนเว็บไซต์</p>
        </div>
    </header>

    <!-- Section TODO -->

    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mm8ACXg2cto" frameborder="0"  allowfullscreen></iframe>
                    </div>
            </div>
            <div class="col-lg-6">
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น</h2>
                <p>เราทำการสอนเขียนเว็บไซต์สำหรับมือใหม่ ด้วยภาษาต่างๆได้แก่ AngularJS Firebase VueJS2 HTML5 CSS3 PHP MySQLi Laravel Bootstrap4</p>
                <br>
                <h3>เราคาดหวังไว้ว่า</h3>
                จะสอนนักเรียนทุกคน ให้สามารถสร้างเว็บไซต์ขึ้นมาด้วยตัวเอง และเรียนรู้องค์ประกอบ ทุกอย่างที่จำเป็นต่อการเริ่มสร้างเว็บไซต์ขึ้นมา เพื่อมห้สามารถประกอบอาชีพ เข้าสมัครงาน ทำโปรเจคจบ หรือทำโปรเจคที่คาดหวังไว้สำเร็จ
            </div>
        </div>


    </section>

    <!-- Section Timeline -->
    <section class="position-relative py-5 jarallax" data-spreed="0.5" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/image/Ubuntu-logo.png" class="img-fluid" width="150" alt="timeline">
                    <h1 class="text-white display-4 font-weight-bold">Timeline About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">24 May 1993</p>
                        </div>
                        <div class="timeline-card">
                            <h5>วันเกิดของเรา</h5>
                            <p class="text-muted">เกิดวันที่ 24 May 1993</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">16 May 1997 </p>
                        </div>
                        <div class="timeline-card">
                            <h5>เรียนโรงเรียน................</h5>
                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur sunt nesciunt perferendis corrupti. In aliquid repellendus, ullam et facere nesciunt enim ex tempora. Assumenda accusantium temporibus quae repudiandae totam debitis.</p>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">30 December 2009</p>
                        </div>
                        <div class="timeline-card">
                            <h5>เรียนโรงเรียน.............</h5>
                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, </p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">5 March 2018</p>
                        </div>
                        <div class="timeline-card">
                            <h5>ทำงานที่............</h5>
                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius doloremque sapiente odio repellat molestiae velit quod similique ab praesentium natus recusandae tenetur ipsam cum perferendis accusantium, sunt quidem nulla laborum!</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa fa-chevron-down"></i>
                    </li>
                </ul>
            </div>
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