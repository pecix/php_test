<?php
    session_start();
    include 'functions.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zawartość testowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //ROZMIAR TABELI
        if($_SESSION["pass"] == "xxxxxx" || $_POST["pass" == "xxxxxx"]){
            echo "<fieldset>\n";
            echo "<legend>Panel</legend>\n";
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
        }elseif($_SESSION["pass"] != "xxxxxx"){
            header("Location: index.php");
        }
        
        if(isset($_POST["wiersze"]) && isset($_POST["kolumny"])){
            $wiersze = $_POST["wiersze"];
            $kolumny = $_POST["kolumny"];
            echo "<h1>Tabliczka mnożenia $wiersze x $kolumny</h1>";
            tabliczkaMnozenia($wiersze, $kolumny);
        }else{
            echo "wpisz rozmiar tabeli";
            breakLine();
        }
        // echo " - Post".var_dump($_POST)."<br />";
        // echo " - Session".var_dump($_SESSION)."<br />";
        // echo " - Wiersze".var_dump($wiersze)."<br />";
        // echo " - Kolumny".var_dump($kolumny)."<br />";
        

    ?>
</body>
</html>