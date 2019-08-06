<?php
session_start();
include 'config.php';

if ($_POST["pass"] == get_password()) {
    $_SESSION["created"] = 1;
    $_SESSION["time"] = time();
    header("Location: content.php");
} else {
    header("Location: index.php?pass=bad");
}
