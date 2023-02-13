<?php
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true) {
    header("location: /login");
    exit;
}

$db = new DB();
?>
<h1>Account Pagina</h1>
<p>Hallo, <?= $_SESSION["username"] ?></p>

<pre>
    <?php var_dump($_SESSION); ?>
</pre>

<?php

//$db->Read('usermeta', "*", '`users_id` = ' . $_SESSION["user_id"] . ' AND `usermeta_key` = "user_role";');
//$db->Read('usermeta', "*", '`users_id` = ' . $_SESSION["user_id"] . ' AND `usermeta_key` = "user_role";');
?>

<pre>
    <?php
            $read = $db->Read('usermeta', "*", '`user_id` = 2 AND `usermeta_key` = "user_role";');
            $array = [];
            foreach ($read as $item) {
                $array[] = $item["usermeta_value"];
            }
            ?>


</pre>
