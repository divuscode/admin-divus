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
                                <li><a href="">Messages</a></li>
                                <li><a href="">Inbox</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">   
                <div class="row">
                    <div class="col-lg-12">
                        <h2><i class="fa fa-home"></i> Inbox</h2>
                    </div>
                </div><!-- /.row -->
                <div class="pages-container">
                   
                    <div class="row">
                        <div class="col-lg-3">
                            <?php include('inbox-category.php'); ?>
                        </div>
                        <div class="col-lg-9">
                            <div class="panel panel-default compose-mail-container">
                                <div class="panel-heading">
                                    Compose mail
                                </div>
                                <div class="panel-body">
                                    <form action="" class="form-horizontal ng-valid ng-dirty">
                                        <div class="form-group">
                                            <label for="mail_to" class="col-xs-2">To:</label>
                                            <div class="col-xs-10">
                                                <input type="text" id="mail_to" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mail_cc" class="col-xs-2">CC:</label>
                                            <div class="col-xs-10">
                                                <input type="text" id="mail_cc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mail_bbc" class="col-xs-2">BBC:</label>
                                            <div class="col-xs-10">
                                                <input type="text" id="mail_bbc" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="mail_subject" class="col-xs-2">Subject:</label>
                                            <div class="col-xs-10">
                                                <input type="text" id="mail_subject" class="form-control">
                                            </div>
                                        </div>
                                        <div class="page-content"></div>
                                        <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Send</button>
                                        <button id="save" class="btn btn-primary" onclick="save()" type="button">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>