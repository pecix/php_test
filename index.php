<?php
session_start();
include 'functions.php';
check_session();
redirect_to_content();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Logowanie testowe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    echo "<form method=\"POST\" action=\"login.php\">\n<fieldset>\n";
    echo "<legend>Enter password:</legend>\n<label><input name=\"pass\" type=\"password\" value=\"\" /></label>\n";
    nbsp(2);
    echo "<button class=\"greenbutton\" type=\"submit\">Authorize</button>\n";
    echo "</fieldset>\n</form>\n";

    // MESSAGE
    if (isset($_GET["pass"]) && $_GET["pass"] == "bad") {
        get_alert("podałeś złe hasło");
    } elseif (isset($_GET["session"]) && $_GET["session"] == "out") {
        get_alert("sesja wygasła");
    } elseif (isset($_GET["logout"]) && $_GET["logout"] == "true") {
        get_alert("Zostałeś wylogowany");
    }
    ?>
</body>

</html>