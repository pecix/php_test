<?php
    session_start();
    if($_POST["pass"] == "xxxxxx"){
        $_SESSION["pass"] = $_POST["pass"];
        header("Location: content.php");
    }else{
        header("Location: index.php?pass=bad");
    }
?>