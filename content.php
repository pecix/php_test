<?php
session_start();
require 'functions.php';
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
    echo "<legend>Panel administracyjny:</legend>\n";
    echo "<form method=\"POST\" class=\"contentform\">\n";
    echo "<label>Wiersze: &nbsp<input name=\"wiersze\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\" /></label>\n";
    breakLine(2);
    echo "<button class=\"greenbutton\" type=\"submit\">Show</button>\n";
    nbsp(2);
    echo "<a href=\"logout.php\"><button class=\"redbutton\" type=\"button\">Logout</button></a>\n";
    echo "</form>\n";
    echo "</fieldset>\n";
    breakLine(2);

    if (isset($_POST["wiersze"]) && isset($_POST["kolumny"])) {
        tabliczkaMnozenia($_POST["wiersze"], $_POST["kolumny"]);
    }
    ?>
</body>

</html>