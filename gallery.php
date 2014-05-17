<!doctype html>
<html>
<head>
    <title>Pages Divus Template</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noodp,noydir" />
    <meta property="og:title" content="Divus Admin Template" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="Admin, Responsive, Bootstrap 3, CSS3, HTML5, theme" />

    <?php include('stylesheet.php'); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->    
</head>
<body>

<!-- Intro loader -->
    <div class="mask">
        <div id="loader"></div>
    </div>
<!-- Intro loader -->
    <div id="wrapper">

        <?php include('sidebar.php'); ?>

        <div class="" id="page-wrapper">
            <nav class="breadcrumbs-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumbs">
                                <li><a href="">Home</a></li>
                                <li><a href="">Gallery</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">   
                <div class="row">
                    <div class="col-lg-12">
                        <h2><i class="fa fa-picture-o"></i> Gallery</h2>
                    </div>
                </div><!-- /.row -->
                <div class="pages-container">
                   <div class="row">
                        <div class="col-lg-12">
                            <a href="" class="btn btn-admin-divus-dark">
                                <i class="fa fa-upload"></i> Upload new image
                            </a>
                            <div class="masonry js-masonry"  data-masonry-options='{ "isFitWidth": true }'>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h3">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h3">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h2">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                                <div class="item w2 h3">
                                    <?php include ('gallery-hover.php'); ?>
                                    <img src="images/team-image-1.jpg" alt="">
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>