<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_menshop = "localhost";
$database_menshop = "menshop";
$username_menshop = "root";
$password_menshop = "";

$menshop = mysql_pconnect($hostname_menshop, $username_menshop, $password_menshop) or trigger_error(mysql_error(),E_USER_ERROR);

// $menshop = new mysqli($hostname_menshop, $username_menshop, $password_menshop,$database_menshop);

// $menshop->set_charset("utf8");
// // Check connection
// if ($menshop -> connect_errno) {
//   echo "Failed to connect to MySQL: " . $menshop -> connect_error;
//   exit();
// }
?>