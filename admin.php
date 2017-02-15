<?php
    session_start();

    if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Administrator") {
        echo "<h1>Welkom ".$_SESSION["user"]["naam"]." op het admingedeelte van de website";
        echo "<p><a href='login.php'>login</a></p>";
    } else if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] != "Administrator") {
        header("location: nonadmin.php");
    } else {
        header("location: login.php");
        //terug naar inlogscherm
    }