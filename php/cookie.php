<!-- cookie
setcookie(name,value,expire,path,domain,secure,httponly) 
to fetch value
$_COOKIE-->

<?php
 $cookie_name="user";
 $cookie_value="Pragya";
//  $cookie_value="";

 setcookie($cookie_name,$cookie_value,time()+(60),"/");
?>
<body>
<?php
if (!isset($_COOKIE[$cookie_name])) {
    echo "cookie is not set";
}
else{
    echo $_COOKIE[$cookie_name];
}
?>
</body>




