<?php
    session_start();
    if($_POST["pass"] == "xxxxxx"){
        // $_SESSION["pass"] = $_POST["pass"];
        $_SESSION["created"] = 1;
        $_SESSION["time"] = time();
        header("Location: content.php");
    }else{
        header("Location: index.php?pass=bad");
    }
?>