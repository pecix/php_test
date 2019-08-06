<?php
session_start();
include 'functions.php';
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
    echo "<form method=\"POST\">\n";
    echo "<label>Wiersze: &nbsp<input name=\"wiersze\" type=\"text\" value=\"\"></label>\n";
    breakLine(2);
    echo "<label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\"></label>\n";
    breakLine(2);
    echo "<button class=\"greenbutton\" type=\"submit\">Pokaż</button>\n";
    nbsp(2);
    echo "<a href=\"logout.php\"><button class=\"redbutton\" type=\"button\">Logout</button></a>\n";
    echo "</form>\n";
    echo "</fieldset>\n";
    breakLine(3);

    if (isset($_POST["wiersze"]) && isset($_POST["kolumny"])) {
        tabliczkaMnozenia($_POST["wiersze"], $_POST["kolumny"]);
    } else {
        echo "wpisz rozmiar tabeli";
        breakLine();
    }
    ?>
</body>

</html>