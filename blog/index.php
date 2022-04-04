<?php 

include("path.php"); 
include(ROOT_PATH . "/app/database/db.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awsome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Nunito&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">

    <!-- local links -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Depressed BLog</title>
</head>


<body>
    
<!--  Include Header Here -->
    <?php include (ROOT_PATH . "/app/includes/header.php");?>
    <?php include (ROOT_PATH . "/app/includes/messages.php");?>

   

  

    <!-- begin page wrapper -->
    <div class="page-wrapper">

        <!-- begin post carousel -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fa fa-chevron-left prev" aria-hidden="true"></i>
            <i class="fa fa-chevron-right next" aria-hidden="true"></i>

            <div class="post-wrapper">
               
               
                <div class="post">
                    <img src="assets/images/valorant.png" alt="valorant" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Valorant</a></h4>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>

                    </div>
                </div>
               
               
                <div class="post">
                    <img src="assets/images/valorant.png" alt="valorant" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Valorant</a></h4>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>

                    </div>
                </div>
                
                
                <div class="post">
                    <img src="assets/images/valorant.png" alt="valorant" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Valorant</a></h4>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>

                    </div>
                </div>
                
                
                <div class="post">
                    <img src="assets/images/valorant.png" alt="valorant" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Valorant</a></h4>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>

                    </div>
                </div>
               
               
                <div class="post">
                    <img src="assets/images/valorant.png" alt="valorant" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">Valorant</a></h4>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>

                    </div>
                </div>
                
                
            </div>
        </div>

        <!-- end post carousel -->

        <!-- CONTENT -->
        <div class="content clearfix">
            <!-- MAIN CONTENT WRAPPER -->
            <div class="main-content-wrapper">
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="assets/images/valorant.png" alt="valorant" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.php">Valorant</a></h1>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>
                        <p class="preview">hello, how are you guys?</p>
                        <a href="single.php" class="btn readmore" >Read More</a>

                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/valorant.png" alt="valorant" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.php">Valorant</a></h1>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>
                        <p class="preview">hello, how are you guys?</p>
                        <a href="single.php" class="btn readmore" >Read More</a>

                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/valorant.png" alt="valorant" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.php">Valorant</a></h1>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>
                        <p class="preview">hello, how are you guys?</p>
                        <a href="single.php" class="btn readmore" >Read More</a>

                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/valorant.png" alt="valorant" class="post-image">
                    <div class="post-preview">
                        <h1><a href="single.php">Valorant</a></h1>
                        <i class="fa fa-user" aria-hidden="true"> kaRMa </i>
                        &nbsp;
                        <i class="fa fa-calendar" aria-hidden="true"> 19 Aug 2020 </i>
                        <p class="preview">hello, how are you guys?</p>
                        <a href="single.php" class="btn readmore" >Read More</a>

                    </div>
                </div>


            </div>
        </div>
             <!-- END MAIN CONTENT -->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="POST">
                        <input type="text " name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Qoutes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Reality</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- CONTENT -->
       

    </div>
    <!-- end page wrapper -->
    
    <!-- Include footer here -->
    <?php include (ROOT_PATH . "/app/includes/footer.php");?>









<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!-- slick js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- local jquery link -->
<script src="assets/js/scripts.js"></script>


</body>
</html>