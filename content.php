<?php
session_start();
require_once 'functions.php';
require_once 'db.php';
check_session();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Zawartość testowa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php


    echo "<fieldset>\n";
    echo "<legend>Tabliczka mnożenia:</legend>\n";

    echo "<form method=\"POST\" class=\"contentform\">\n";
    echo "<label>Wiersze: &nbsp<input name=\"wiersze\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<button class=\"greenbutton\" type=\"submit\">Show</button>\n";
    echo "</form>\n";
    echo "</fieldset>";
    nbsp(2);

    echo "<fieldset>\n";
    echo "<legend>Baza danych</legend>\n";
    echo "<form method=\"POST\" class=\"contentform\">\n";
    echo "<button class=\"greenbutton\" type=\"submit\" name=\"users\" value=\"1\">Show Users</button>\n";
    nbsp(2);
    echo "<button class=\"redbutton\" type=\"submit\" name=\"users\" value=\"0\">Hide Users</button>\n";
    echo "</form>\n";
    echo "</fieldset>\n";
    nbsp(2);

    echo "<fieldset>\n";
    echo "<legend>Logout</legend>\n";
    echo "<a href=\"logout.php\"><button class=\"redbutton\" type=\"button\">Logout</button></a>\n";
    echo "</fieldset>\n";
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