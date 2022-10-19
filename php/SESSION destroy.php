<?php
    session_start();
    session_unset();
    session_destroy();
    echo "session is destroyed";
$_SESSION["favcolor"] = ["orange"];
?> 
