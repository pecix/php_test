<?php
session_start();
require_once 'functions.php';

if (verify_password($_POST["pass"])) {
    $_SESSION["created"] = 1;
    $_SESSION["time"] = time();
    header("Location: content.php");
} else {
    header("Location: index.php?pass=bad");
}
