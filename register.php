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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tm_member (m_username, m_password, m_name, Email, Address) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['m_username'], "text"),
                       GetSQLValueString($_POST['m_password'], "text"),
                       GetSQLValueString($_POST['m_name'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['Address'], "text"));

  mysql_select_db($database_menshop, $menshop);
  $Result1 = mysql_query($insertSQL, $menshop) or die(mysql_error());

  $insertGoTo = "Login.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>This shop for men</title>
<style type="text/css">
body {
	background-image: url(img/bg.png);
}
</style>
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="700" align="center">
  <tr>
    <td height="248"><img src="images/menshop_01.jpg" width="1024" height="246" /></td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="153"><a href="index.php"><img src="images/menshop_02.jpg" width="153" height="58" /></a></td>
    <td width="188"><a href="gig - Copy.php"><img src="images/menshop_03.jpg" width="188" height="58" /></a></td>
    <td width="174"><a href="vitee - Copy.php"><img src="images/menshop_04.jpg" width="174" height="58" /></a></td>
    <td width="176"><a href="Login.php"><img src="images/menshop_05.jpg" width="176" height="58" /></a></td>
    <td width="145"><a href="titto2 - Copy.php"><img src="images/menshop_06.jpg" width="165" height="58" /></a></td>
    <td width="65"><a href="tepug - Copy (3) - Copy.php"><img src="images/menshop_07.jpg" width="168" height="58" /></a></td>
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
        <td><a href="In_men7 - Copy.php"><img src="images/menshop_12.jpg" width="280" height="61" /></a></td>
      </tr>
      <tr>
        <td><a href="seoy - Copy.php"><img src="images/menshop_13.jpg" width="280" height="72" /></a></td>
      </tr>
      <tr>
        <td><a href="kov - Copy.php"><img src="images/menshop_14.jpg" width="279" height="73" /></a></td>
      </tr>
      <tr>
        <td><a href="gun - Copy.php"><img src="images/menshop_16.jpg" width="279" height="74" /></a></td>
      </tr>
      <tr>
        <td><a href="Aboutweb - Copy.php"><img src="images/menshop_17.jpg" width="280" height="78" /></a></td>
      </tr>
    </table>      &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td>
    <td width="744" valign="top"><form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
      <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><a href="Login.php"><img src="images/button.png" width="212" height="64" /></a></td>
              <td><a href="register.php"><img src="images/smilekrub-register.gif" width="212" height="64" /></a></td>
            </tr>
          </table></td>
          </tr>
        <tr>
          <td width="288" align="right">Username</td>
          <td width="412"><label for="m_username"></label>
            <input type="text" name="m_username" id="m_username"  required="required" placeholder="A-Z หรือ 0-9 เท่านั้น"/></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td><label for="m_password"></label>
            <input type="password" name="m_password" id="m_password"  required="required" placeholder="A-Z หรือ 0-9 เท่านั้น"/></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Name</td>
          <td><label for="m_name"></label>
            <input type="text" name="m_name" id="m_name"  required="required" placeholder="ชื่อ-นามสกุล"/>
            <br /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Email</td>
          <td><label for="Email"></label>
            <input type="text" name="Email" id="Email" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Address</td>
          <td><label for="Address"></label>
            <textarea name="Address" id="Address"cols="45" rows="5" > </textarea>  </td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><input type="submit" name="Save" id="Save" value="บันทึก" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>