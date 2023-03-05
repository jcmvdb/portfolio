<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>

    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/style/css/style.css">

</head>
<body>
<div id="background-image">
    <div class="blur">
    <div id="wrapper">

        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        ?>

        <div class="topnav" id="myTopnav">

                <a href="/home" class="first-child">Home</a>
                <a href="/portfolio">Portfolio</a>
                <a href="/over-mij">Over mij</a>
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "<a href='/account'>account</a>";
                    echo "<a href='/logout'>logout</a>";
                }
                ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
<!--                    <i class="fa fa-bars">X</i>-->
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </a>
        </div>