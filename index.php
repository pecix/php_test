<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona  testowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include 'functions.php';

        //ROZMIAR TABELI
        if($_SESSION["pass"] == "xxxxxx" || $_POST["pass" == "xxxxxx"]){
            echo "<form method=\"POST\">\n<fieldset>\n";
            echo "<legend>Rozmiar tabeli:</legend>\n";
            echo "<label>Wiersze: <input name=\"wiersze\" type=\"text\" value=\"\"></label>\n";
            breakLine(2);
            echo "<label>Kolumny: <input name=\"kolumny\" type=\"text\" value=\"\"></label>\n";
            breakLine(2);
            echo "<button class=\"greenbutton\" type=\"submit\">Pokaż</button>\n";
            echo "</fieldset>\n</form>\n";
            echo "<a href=\"logout.php\"><button class=\"redbutton\">Logout</button></a>\n";
            breakLine(5);
        }
        
        // echo "Session: ".var_dump($_SESSION)."<br />";
        // echo "Post: ".var_dump($_POST)."<br />";
        $wiersze = $_POST["wiersze"];
        $kolumny = $_POST["kolumny"];
        
        tabliczkaMnozenia($wiersze,$kolumny);
        
        // LOGOWANIE
        if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "xxxxxx"){
            echo "<form method=\"POST\" action=\"login.php\">\n<fieldset>\n";
            echo "<legend>Enter password:</legend>\n<label><input name=\"pass\" type=\"password\" value=\"\"></label>\n";
            nbsp(2);
            echo "<button class=\"greenbutton\" type=\"submit\">Authorize</button>\n";
            echo "</fieldset>\n</form>\n";
        }
    ?>
</body>
</html>