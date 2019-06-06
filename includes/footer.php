<?php  $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php"); ?>

<section class="position-relative py-5 jarallax" data-spreed="0.5" style="background-image: url(https://images.unsplash.com/photo-1548919973-5cef591cdbc9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="assets/image/Ubuntu-logo.png" class="img-fluid" width="150" alt="timeline">
                <h2 class="text-white display-4 font-weight-bold">Appstory Studio สอนเขียนเว็บไซต์</h2>
                <div class="star-rating">
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                    <span>☆</span>
                <div class="star-current" style="width: 50%;">
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                    <span>★</span>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="semi-footer p-5 text-center text-md-left">
        <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="#">
                <img src="assets/image/Ubuntu-logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                AppStory Studio
            </a>
            <p>
                <i class="fa fa-phone-square"></i> : 099-999-9999 <br>
                <i class="fa fa-envelope-square"></i> : email@gmail.com <br>
                <i class="fa fa-address-card"></i> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quia!<br>
            </p>
            <a href="http://www.facebook.com" target="_blank">
                <i class="fa fa-facebook fa-2x"></i>
            </a>
            <a href="http://www.youtube.com" target="_blank">
                <i class="fa fa-youtube fa-2x"></i>
            </a>
                
        </div>
        <div class="col-md-3">
            <h4>เมนู</h4>
            <ul class="navbar-nav">
                <li class="nav-item <?php echo $file_name == 'index' ? 'active': '' ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $file_name == 'about' ? 'active': '' ?>">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active': '' ?>">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item <?php echo $file_name == 'contact' ? 'active': '' ?>">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="col-md-5">
            <h4>แผนที่</h4>
            <div id="map"></div>
        </div>
        </div>
    </footer>
    <footer class="footer">
        <span> COPYRIGHT 2019 <a href="http://www.facebook.com" target="_blank">AppStory Studio</a>
        All Right Reserved
        </span>
    </footer>