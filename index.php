<?php

require "header.php";
require "functions.php";

$page = "pages/home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = "pages/".$_GET['page'];
}

if (file_exists($page . ".php")) {
    include($page . ".php");
} else {
    include "404.php";
}

require "footer.php";