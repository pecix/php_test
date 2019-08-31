<?php

require_once 'config.php';

function breakLine($value = 1)
{
    for ($i = 0; $i < $value; $i++) {
        echo "<br />";
    }
    echo "\n";
}

function nbsp($value = 1)
{
    for ($i = 0; $i < $value; $i++) {
        echo "&nbsp";
    }
    echo "\n";
}

function tabliczkaMnozenia($wiersze, $kolumny)
{
    if ($wiersze < 1 || $kolumny < 1) {
        get_alert("podałeś złe dane ");
    } else {
        echo "<h1>Tabliczka mnożenia $wiersze x $kolumny</h1>";
        echo "<table>\n";
        for ($i = 1; $i <= $wiersze; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $kolumny; $j++) {
                if ($i == 1 && $j == 1) {
                    echo "<th>" . $i * $j . "</th>";
                } elseif ($i == 1 && $j != 1) {
                    echo "<th class=\"col\">" . $i * $j . "</th>";
                } elseif ($i != 1 && $j == 1) {
                    echo "<th  class=\"row\">" . $i * $j . "</th>";
                } else {
                    echo "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>\n";
        }
        echo "<table>\n";
        breakLine(2);
    }
}

function check_session()
{
    if (isset($_SESSION["created"]) && isset($_SESSION["time"])) {
        if ($_SESSION["created"] == 1 && time() - $_SESSION["time"] < SESSION_TIME) {
            $_SESSION["time"] = time();
        }
        if ($_SESSION["created"] == 1 && time() - $_SESSION["time"] > SESSION_TIME) {
            session_unset();
            session_destroy();
            header("Location: index.php?session=out");
        }
    }
}

function get_alert($message)
{
    echo "<span class=\"alert\">&nbsp" . $message . " </span>\n";
}

function redirect_to_content()
{
    if (isset($_SESSION["created"]) && isset($_SESSION["time"])) {
        if ($_SESSION["created"] == 1 && time() - $_SESSION["time"] < SESSION_TIME) {
            header("Location: content.php");
        }
    }
}

function verify_password($password)
{
    if ($password == PASSWORD) {
        return 1;
    } else {
        return 0;
    }
}

function get_window($title, $content)
{
    echo "
    <div class=\"window\">
        <div class=\"header\">
            <div class=\"title\">$title</div>
            <div class=\"buttons\">
                <a href=\"logout.php\"><div class=\"button\">x</div></a>
            </div>
        </div>
        <div class=\"content\">
            $content
        </div>
    </div>
    ";
}

function get_window_without_logout_button($title, $content)
{
    echo "
    <div class=\"window\">
        <div class=\"header\">
            <div class=\"title\">$title</div>
            <div class=\"buttons\"></div>
        </div>
        <div class=\"content\">
            $content
        </div>
    </div>
    ";
}
