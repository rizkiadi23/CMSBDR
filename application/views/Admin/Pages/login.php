<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../assets/paper_img/favicon.ico">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>BDRCMS Version 1.0 | <?= $title ?></title>

        <!-- Favicon Setting -->
        <link rel="icon" href="<?php echo base_url(); ?>assets/admin/img/icon.png" type="image/x-icon">

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/css/ct-paper.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/admin/css/examples.css" rel="stylesheet" /> 

        <!--     Fonts and icons     -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">BDR Project Team</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navigation-example-2">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url(); ?>" class="btn btn-simple">Kembali</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-simple">Tutorial</a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-->
        </nav> 

        <div class="wrapper">
            <div class="register-background"> 
                <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title">Welcome</h3>
                                <form action="<?php echo base_url(); ?>users/login" method="post" class="register-form">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>

                                    <button type="submit" class="btn btn-danger btn-block">login</button>
                                </form>
                                <div class="forgot">
                                    <a href="#" class="btn btn-simple btn-danger">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
                <div class="footer register-footer text-center">
                    <h6>&copy; 2017, made with <i class="fa fa-heart heart"></i> by bdr project team</h6>
                </div>
            </div>
        </div>      

    </body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/admin/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url(); ?>assets/admin/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url(); ?>assets/admin/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>
</html>