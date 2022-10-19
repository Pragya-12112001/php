<!-- $_SESSION
all details of the visitor in server (temperorly ) is known as "session store"
if want permanent -use database
browser provides cache memory => 4-5mb (local storage ,which is avaliable only on client site) 

session_start();
$_SESSION[name]=value;
echo$_SESSION[name];

delete=>
session_unset(); //remove all session variable
session_destroy();

-->

<?php
    session_start();
    $_SESSION["favcolor"] = "orange";
?>