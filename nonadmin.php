<?php
    session_start();

    echo "<h1>".$_SESSION["user"]["naam"].", u heeft niet genoeg rechten";
    echo "<p><a href='login.php'>login</a></p>";