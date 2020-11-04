<?php include("session.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        <?php include_once("CSS/styles_quiz.css") ?>
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df44c1c5e3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid header-nav">
        <nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
            <a href="index.html"><img src="images/mypic.png" alt="Some Pic" width="32px" height="32px"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="collapsible-nav" class="collapse navbar-collapse">
                <ul  class="navbar-nav ml-auto "> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="">
                            Link
                        </a>
                    </li> 
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid justify-content-center">
        <form action="" class="ml-auto mr-auto">
            <div class="form-group">
                <p class="text-center">Question1</p><br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="Q1" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q1" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q1" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q1" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <p class="text-center">Question2</p><br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="Q2" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q2" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q2" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q2" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <p class="text-center">Question3</p><br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="Q3" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q3" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q3" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q3" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <p class="text-center">Question4</p><br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="Q4" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q4" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q4" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q4" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <p class="text-center">Question5</p><br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="Q5" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q5" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q5" value="">
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="Q5" value="">
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-dark btn-block">Finish Attempt</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>