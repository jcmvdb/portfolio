<?php

require "header.php";
require "functions.php";

echo '<div class="content ">';

$page = "pages/home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = "pages/".$_GET['page'];
}

if (file_exists($page . ".php")) {
    include($page . ".php");
} else {
    include "404.php";
}

echo "</div>";

require "footer.php";