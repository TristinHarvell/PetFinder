<?php
include 'connect-basketball.php'
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link rel="shortcut icon" type="image/png" href="https://www.backcourthoops.com/wp-content/uploads/2014/07/favicon.ico" />

        <title>Basketball Database</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Logo and responsive toggle -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="home.php">
                	<span class="glyphicon glyphicon-fire"></span> 
                	Basketball Database
                </a>
                </div>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="teams.php">Teams</a>
                        </li>
                        <li>
                            <a href="players.php">Players</a>
                        </li>
                        <li>
                            <a href="coaches.php">Coaches</a>
                        </li>
                        <li>
                            <a href="games.php">Games</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="about-us">
                                <li><a href="admin_login.php">Admin</a></li>
                                <li><a href="uploader_login.php">Uploader</a></li>
                                <li><a href="user_login.php">User</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="jumbotron feature">
            <div class="container">
                <h1>Basketball Database</h1>
                <p>All the latest statistics regarding the NBA.</p>
            </div>
        </div>

        <!-- Content -->
        <div class="container">

            <!-- Page Intro -->
            <div class="row page-intro">
                <div class="col-lg-12">
                    <h1>Powerful Statistics
                        <small>At Your Fingertips</small>
                    </h1>
                    <p>Track your favorite teams, players, coaches, and games using our NBA stats tracker. We've compiled in-depth analysis for every game to give you the best representation of the current NBA league.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Feature Row -->
            <div class="row">
                <article class="col-md-4 article-intro">
                    <a href="teams.php">
                    <img class="img-responsive img-rounded" src="img/teams.jpeg" alt="">
                </a>
                    <h3>
                        <a href="teams.php">View Teams</a>
                    </h3>
                    <p>See each NBA team in the league.</p>
                </article>
                <article class="col-md-4 article-intro">
                    <a href="players.php">
                    <img class="img-responsive img-rounded" src="img/player.jpeg" alt="">
                </a>
                    <h3>
                        <a href="players.php">View Players</a>
                    </h3>
                    <p>Every player is listed with their individual statistics.</p>
                </article>

                <article class="col-md-4 article-intro">
                    <a href="coaches.php">
                    <img class="img-responsive img-rounded" src="img/coach.jpeg" alt="">
                </a>
                    <h3>
                        <a href="coaches.php">View Coaches</a>
                    </h3>
                    <p>Brief biographical data are available for every head coach in the NBA.</p>
                </article>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <footer>
            <div class="small-print">
                <div class="container">
                    <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
                    <p>CS 485: Spring 2019 </p>
                </div>
            </div>
        </footer>


        <!-- jQuery -->
        <script src="js/jquery-1.11.3.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- IE10 viewport bug workaround -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>

        <!-- Placeholder Images -->
        <script src="js/holder.min.js"></script>

    </body>

    </html>
