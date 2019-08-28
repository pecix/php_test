<?php
session_start();
require 'functions.php';
require 'db.php';
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

    // echo "<div class=\"menu\">";
    echo "<form method=\"POST\" class=\"contentform\">\n";
    echo "<label>Wiersze: &nbsp<input name=\"wiersze\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<button class=\"greenbutton\" type=\"submit\">Show</button>\n";
    nbsp(2);
    echo "<a href=\"logout.php\"><button class=\"redbutton\" type=\"button\">Logout</button></a>\n";
    echo "</form>\n";
    // echo "</div>";
    echo "</fieldset>";

    nbsp(2);

    // echo "<div class=\"menu\">";
    echo "<fieldset>\n";
    echo "<legend>Baza danych</legend>\n";
    echo "<form method=\"POST\" class=\"contentform\">\n";
    echo "<button class=\"greenbutton\" type=\"submit\" name=\"users\" value=\"1\">Show Users</button>\n";
    nbsp(2);
    echo "<button class=\"redbutton\" type=\"submit\" name=\"users\" value=\"0\">Hide Users</button>\n";
    echo "</form>\n";
    // echo "</div>";

    echo "</fieldset>\n";
    breakLine(2);

    // echo "<form method=\"POST\" class=\"contentform\">\n";
    // echo "<button class=\"greenbutton\" type=\"submit\" name=\"users\" value=\"1\">Show Users</button>\n";
    // nbsp(2);
    // echo "<button class=\"redbutton\" type=\"submit\" name=\"users\" value=\"0\">Hide Users</button>\n";
    // echo "</form>\n";
    // breakLine(2);

    if (isset($_POST["wiersze"]) && isset($_POST["kolumny"])) {
        tabliczkaMnozenia($_POST["wiersze"], $_POST["kolumny"]);
    }

    if (isset($_POST["users"]) && $_POST["users"] == true) {
        showUsers();
    }


    ?>
</body>
</html>