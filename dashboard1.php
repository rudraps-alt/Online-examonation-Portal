<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        <?php include_once("CSS/styles_dash.css") ?>
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df44c1c5e3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid header-nav">
        <nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
            <p class="navbar-brand">Hey, <?php echo $_SESSION['username']; ?>!</p>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="collapsible-nav" class="collapse navbar-collapse">
                <ul  class="navbar-nav ml-auto "> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="1.php">
                            Not a User?
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="self-study.html">
                            Self Study
                        </a>
                    </li> 
                </ul>
            </div>
        </nav>
    </div>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 choose_exam ml-auto mr-auto">
                <div class="text-center choose_intro">
                    Choose your subject!
                </div>
                <div class="subject">
                    <a href="C++.php"><button class="btn btn-warning btn-block">C++</button></a>
                </div>
                <div class="subject">
                    <a href="Python.php"><button class="btn btn-warning btn-block">Python</button></a>
                </div>
                <div class="subject">
                    <a href="DSA.php"><button class="btn btn-warning btn-block">DSA</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
