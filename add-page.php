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
                                <li><a href="">Add page</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">   
                <div class="row">
                    <div class="col-lg-12">
                        <h2><i class="fa fa-home"></i> Add page</h2>
                    </div>
                </div><!-- /.row -->
                <div class="pages-container">
                   
                    <div class="row">
                        <div class="col-lg-6">            
                            <h3>Page title</h3>
                            <div class="input-group input-group-lg">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="">
                            </div>
                            <h3>Page permalink</h3>
                            <div class="input-group input-group-lg">
                              <span class="input-group-addon"></span>
                              <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Choose template
                                </div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="template" data-title="Home">
                                        </span>
                                        <span class="form-control">Home</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="template" data-title="Home">
                                        </span>
                                        <span class="form-control">Home</span>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="template" data-title="Home">
                                        </span>
                                        <span class="form-control">Home</span>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="row">              
                        <div class="col-lg-12">
                            <div class="page-content"></div>
                            <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
                            <button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
                            <div class="page-lead"></div>
                            <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
                            <button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>