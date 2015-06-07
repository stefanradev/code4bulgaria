<?php
$hostname="sql101.byethost24.com"; //local server name default localhost
$username="b24_16295096";  //mysql username default is root.
$password="M@!KAti";       //blank if no password is set for mysql.
$database="b24_16295096_jalba";  //database name which you created
$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>
