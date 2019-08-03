<?php
    session_start();
    include 'functions.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logowanie  testowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // LOGOWANIE
        if(!isset($_SESSION["pass"]) || $_SESSION["pass"] != "xxxxxx"){
            echo "<form method=\"POST\" action=\"login.php\">\n<fieldset>\n";
            echo "<legend>Enter password:</legend>\n<label><input name=\"pass\" type=\"password\" value=\"\"></label>\n";
            nbsp(2);
            echo "<button class=\"greenbutton\" type=\"submit\">Authorize</button>\n";
            echo "</fieldset>\n</form>\n";
        }elseif($_SESSION["pass"] == "xxxxxx"){
            header("Location: content.php");
        }
        
        if(isset($_GET["pass"]) && $_GET["pass"] == "bad"){
            echo "Podałeś złe hasło. Spróbuj jeszcze raz.";
        }
    ?>
</body>
</html>