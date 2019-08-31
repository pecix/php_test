<?php
session_start();
require_once 'functions.php';
check_session();
redirect_to_content();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logowanie testowe</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href= "window.css">
</head>
<body>
    <?php

    $content = "
        <form method=\"POST\" action=\"login.php\">
        <input name=\"pass\" type=\"password\" value=\"\" /> &nbsp&nbsp
        <button class=\"greenbutton\" type=\"submit\">Login</button>
        ";

    get_window_without_logout_button("Logowanie", $content);
    breakLine(2);


    // MESSAGE
    if (isset($_GET["pass"]) && $_GET["pass"] == "bad") {
        get_alert("podałeś złe hasło");
    } elseif (isset($_GET["session"]) && $_GET["session"] == "out") {
        get_alert("sesja wygasła");
    } elseif (isset($_GET["logout"]) && $_GET["logout"] == "true") {
        get_alert("zostałeś wylogowany");
    }

    ?>
</body>
</html>