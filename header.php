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
<div id="wrapper">

    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>

    <nav>
        <div class="left">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/portfolio">portfolio</a></li>
                <li><a href="/over-mij">over mij</a></li>
            </ul>
        </div>
        <div class="right">
            <ul>
                <?php
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo "<li><a href='/account'>account</a></li>";
                    echo "<li><a href='/logout'>logout</a></li>";
                } else {
                    echo "<li><a href='/login'>login</a></li>";
                    echo "<li><a href='/register'>register</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>