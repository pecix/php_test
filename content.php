<?php
session_start();
require_once 'functions.php';
require_once 'db.php';
redirect_to_index();
check_session();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zawartość testowa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href= "window.css">
</head>
<body>
    <?php

    $content = "
        <form method=\"POST\" class=\"contentform\">
            <label>Wiersze: &nbsp<input name=\"wiersze\" type=\"text\" value=\"\" /></label><br />
            <label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\" /></label><br />
            <button class=\"greenbutton\" type=\"submit\">Show</button>
        </form>
        <hr />
        <form method=\"POST\" class=\"contentform\">
            <button class=\"greenbutton\" type=\"submit\" name=\"users\" value=\"1\">Show Users</button>
            <button class=\"redbutton\" type=\"submit\" name=\"users\" value=\"0\">Hide Users</button>
        </form>
    ";

    get_window("Panel administracyjny", $content);
    breakLine(2);

    if (isset($_POST["wiersze"]) && isset($_POST["kolumny"])) {
        check_session();
        tabliczkaMnozenia($_POST["wiersze"], $_POST["kolumny"]);
    }

    if (isset($_POST["users"]) && $_POST["users"] == true) {
        check_session();
        showUsers();
    }

    ?>
</body>
</html>