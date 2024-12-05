<?php
session_start();
require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online feedback System</title>
    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style>
        .video-container {
            position: relative;
            width: 100%;
            height: auto;
        }

        .video-container video {
            width: 200%;
            height: 100px;
        }

    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#000A30">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">
                <img src="images/logo.png" alt="Logo" style="height: 35px; width: 170px; auto; display: inline-block;">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>

                    <li>
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>

                    <li>
                        <a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>

                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sign-in fa-fw"></i>Login
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?info=login">Student</a></li>
                            <li><a href="index.php?info=faculty_login">Faculty</a></li>
                            <li><a href="admin">Admin</a></li>
                            <li><a href="HOD">HOD</a></li>
                            <li><a href="Principal">Principal</a></li>
                            <li><a href="Management">Management</a></li>
                        </ul>
                    </li>

                    <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php
    @$info = $_GET['info'];
    if ($info != "") {
        if ($info == "about") {
            include('about.php');
        } elseif ($info == "contact") {
            include('contact.php');
        } elseif ($info == "login") {
            include('login.php');
        } elseif ($info == "faculty_login") {
            include('faculty_login.php');
        } elseif ($info == "registration") {
            include('registration.php');
        }
    } else {
    ?>
        <!-- Page Content -->
        <div class="container">
            <div class="row" style="margin-top:20px; margin-bottom:80px">
                <div class="col-lg-8">
                    <!-- About Section -->
                    <h2>Welcome to Cambridge Institute of Technology North Campus</h2>
                    <h3>Education Beyond Syllabus & Knowledge</h3>
                    <br>
                    <p>The North Campus is located off International Airport road & is well-connected. We take pride in our state-of-the-art infrastructure & our teaching faculty who not only create a positive learning environment that encourages Entrepreneurship & Leadership, but motivate students to exercise their knowledge on real-world problems & skills required.</p>
                    <p>A 360-degree feedback system is a comprehensive performance evaluation tool where employees receive confidential,
                        anonymous feedback from the people who work around them. This typically includes Students, Faculty, HOD, Principal, Management, and sometimes, Non Teaching Staff.
                        The goal is to provide a well-rounded perspective on an individual's performance, highlighting strengths and identifying areas for development.
                        Feedback is usually gathered through structured questionnaires and is used for professional growth rather than for administrative decisions like promotions or salary increases.
                        This holistic approach fosters open communication, enhances self-awareness, and contributes to the overall improvement of individual and organizational performance.</p>
                </div>
                <div class="col-lg-4">
                    <!-- Live Video Section -->
                    <video id="liveVideo" controls style="width:118%; height:auto;">
                        <source src="videos/videoplayback.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    <?php } ?>
    <!-- /.container -->

    <div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#000A30">
        <span style="color:#FFFFFF">Developed By CIT-NC Students</span>
    </div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>
