<?php

$db = new DB();
$roles = $db->Read('usermeta');

foreach ($roles as $role) {
    if ($role["user_id"] === $_SESSION["user_id"]) {
        if ($role["usermeta_key"] === "user_role") {
            if ($role['usermeta_value'] === "administrator") {
                echo "<h1>WELKOM TERUG ADMIN ".$_SESSION["username"]."</h1>";
            }
            echo $role["usermeta_value"] . "<br>";
        }
    }
}