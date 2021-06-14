<?php require_once('Connections/menshop.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_menshop, $menshop);
$query_Recordset1 = "SELECT * FROM tbl_product";
$Recordset1 = mysql_query($query_Recordset1, $menshop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url(img/bg.png);
}
</style>
</head>

<body>
<table width="700" align="center">
  <tr>
    <td height="248"><img src="images/menshop_01.jpg" width="1024" height="246" /></td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="153"><img src="images/menshop_02.jpg" width="153" height="58" /></td>
    <td width="188"><img src="images/menshop_03.jpg" width="188" height="58" /></td>
    <td width="174"><img src="images/menshop_04.jpg" width="174" height="58" /></td>
    <td width="176"><img src="images/menshop_05.jpg" width="176" height="58" /></td>
    <td width="145"><img src="images/menshop_06.jpg" width="165" height="58" /></td>
    <td width="65"><img src="images/menshop_07.jpg" width="168" height="58" /></td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/menshop_08.jpg" width="1024" height="13" /></td>
  </tr>
</table>
<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="280" height="470"><table width="100" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="images/menshop_09.jpg" width="280" height="93" /></td>
      </tr>
      <tr>
        <td><img src="images/menshop_12.jpg" width="280" height="61" /></td>
      </tr>
      <tr>
        <td><img src="images/menshop_13.jpg" width="280" height="72" /></td>
      </tr>
      <tr>
        <td><img src="images/menshop_14.jpg" width="279" height="73" /></td>
      </tr>
      <tr>
        <td><img src="images/menshop_16.jpg" width="279" height="74" /></td>
      </tr>
      <tr>
        <td><img src="images/menshop_17.jpg" width="280" height="78" /></td>
      </tr>
    </table>      &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td>
    <td width="744" align="center" valign="top"><p>&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
