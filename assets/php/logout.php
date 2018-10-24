<?php
session_start();
setcookie("userid", $username, time() - (86400 * 30), "/"); 
if(session_destroy()) // Destroying All Sessions
{
 echo "<script language='javascript' type='text/javascript'> location.href='/index.php' </script>";  
}
?>