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
                        <div class="content-page-header">
                            <h2><i class="fa fa-home"></i>Pages</h2>
                            <div class="pages-edit-icon">
                                <span class="confirm-icon"><i class="fa fa-check"></i></span>
                                <span class="add-icon"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">                  
                        <div class="pages-container">
                            <ul id="sortable">
                                <li class="pages-sortable">
                                    <a href="">Home</a>
                                    <span class="pages-edit-icon">     
                                        <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </span>
                                </li>
                                <li class="pages-sortable">
                                    <a href="">About us</a>
                                    <span class="pages-edit-icon">     
                                        <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </span>
                                </li>
                                <li class="pages-sortable">
                                    <a href="">Gallery</a>
                                    <span class="pages-edit-icon">     
                                        <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </span>
                                    <ul id="sortable">
                                        <li class="pages-sortable pages-sortable-submenu">
                                            <a href="">Single</a>
                                            <span class="pages-edit-icon">     
                                                <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                                <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </span>
                                        </li>
                                        <li class="pages-sortable pages-sortable-submenu">
                                            <a href="">Multi</a>
                                            <span class="pages-edit-icon">     
                                                <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                                    <i class="fa fa-check"></i>
                                                </span>
                                                <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pages-sortable">
                                    <a href="">Contact</a>
                                    <span class="pages-edit-icon">     
                                        <span class="confirm-icon" data-toggle="tooltip" data-placement="top" title="Save page order">
                                            <i class="fa fa-check"></i>
                                        </span>
                                        <span class="add-icon" data-toggle="tooltip" data-placement="top" title="Add new page">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>