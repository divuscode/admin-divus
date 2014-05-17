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
                            <div class="panel panel-default mail-container">
                                <div class="panel-heading">
                                    Choose template
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr class="mail-unread">
                                                <td>
                                                    <label class=""><input name="checkbox1" type="checkbox" value="option1"><span></span>
                                                    </label>
                                                </td>
                                                <td>Jane Swift <i class="fa fa-circle text-info"></i></td>
                                                <td>Nice to meet you</td>
                                                <td><i class="fa fa-paperclip"></i></td>
                                                <td>3/11/14 2:30 PM</td>
                                                <td><i class="fa fa-star"></i></td>
                                            </tr>

                                            <tr class="mail-unread">
                                                <td>
                                                    <label class="">
                                                        <input name="checkbox1" type="checkbox" value="option1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>Gmail</td>
                                                <td>Please confirm your registeration</td>
                                                <td> </td>
                                                <td>2/19/14 2:00 PM</td>
                                                <td><i class="fa fa-star text-danger"></i></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="">
                                                        <input name="checkbox1" type="checkbox" value="option1">
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>John Smith <i class="fa fa-circle text-danger"></i></td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td> </td>
                                                <td>2/15/14 5:00 AM</td>
                                                <td><i class="fa fa-star"></i></td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <label class="">
                                                        <input name="checkbox1" type="checkbox" value="option1" checked=""><span></span>
                                                    </label>
                                                </td>
                                                <td>no-reply</td>
                                                <td>Consectetur adipisicing elit.</td>
                                                <td></td>
                                                <td>2/11/14 2:00 PM</td>
                                                <td><i class="fa fa-star text-danger"></i></td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <label class="">
                                                        <input name="checkbox1" type="checkbox" value="option1" checked=""><span></span>
                                                    </label>
                                                </td>
                                                <td>no-reply <i class="fa fa-circle text-success"></i></td>
                                                <td>Consectetur adipisicing elit.</td>
                                                <td></td>
                                                <td>2/11/14 2:00 PM</td>
                                                <td><i class="fa fa-star text-danger"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('end.php'); ?>