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
                                <li><a href="">Pages</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">   
                <div class="row">
                    <div class="col-lg-12">
                        <h2><i class="fa fa-home"></i> Pages</h2>
                    </div>
                </div><!-- /.row -->
                <div class="pages-container">
                    <div class="row">
                        <?php include('primary-menu.php'); ?>

                        <?php include('secondary-menu.php'); ?>

                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="nav nav-tabs-admin-divus-dark nav-tabs">
                                <li class="active"><a href="#all" data-toggle="tab">All pages</a></li>
                                <li><a href="#static" data-toggle="tab">Static</a></li>
                                <li><a href="#dynamic" data-toggle="tab">Dynamic</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane tab-pane-admin-divus-dark active" id="all">
                                    <?php include('select-all-pages.php'); ?>
                                </div>

                                <div class="tab-pane tab-pane-admin-divus-dark" id="static">
                                    <?php include('select-static-pages.php'); ?> 
                                </div>

                                <div class="tab-pane tab-pane-admin-divus-dark" id="dynamic">
                                    <?php include('select-dynamic-pages.php'); ?> 
                                </div>
                                <div class="button-for-add-pages">
                                    <a href="" class="btn btn-block btn-admin-divus-dark add-page-to-primary-menu">
                                        add page to primary menu
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <a href="" class="btn btn-block btn-admin-divus-dark add-page-to-secondary-menu">
                                        add page to secondary menu
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
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
    </div>
<?php include('end.php'); ?>