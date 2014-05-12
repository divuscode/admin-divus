<!doctype html>
<html>
<head>
    <title>Admin Divus Template</title>
    
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
                                <li><a href="">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content-page-header">
                            <h2><i class="fa fa-home"></i>Dashboard</h2>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">                  
                        <div class="panel panel-divus-dark">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Area Line Graph Example with Tooltips</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-chart-area"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>