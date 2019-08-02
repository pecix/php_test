<?php
    session_start();
    if($_POST["pass"] == "xxxxxx"){
        $_SESSION["pass"] = $_POST["pass"];
        header("Location: index.php");
    } else{
        header("Location: index.php");
    }
?>