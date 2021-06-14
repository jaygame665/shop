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
$query_Recordset1 = "SELECT * FROM tm_member";
$Recordset1 = mysql_query($query_Recordset1, $menshop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['m_username'])) {
  $loginUsername=$_POST['m_username'];
  $password=$_POST['m_password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "In_men7.php";
  $MM_redirectLoginFailed = "Login.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_menshop, $menshop);
  
  $LoginRS__query=sprintf("SELECT m_username, m_password, m_level FROM tm_member WHERE m_username=%s AND m_password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $menshop) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);

  $row_Recordset1 = mysql_fetch_assoc($LoginRS);

  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
    $_SESSION['MM_level'] = $row_Recordset1['m_level'];      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>This shop for men</title>
<style type="text/css">
body {
	background-image: url(images/bg.png);
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
    <td width="153" height="58"><a href="index.php"><img src="images/menshop_02.jpg" width="153" height="58" /></a></td>
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
    <td width="744" valign="top"><form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
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
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="314" align="right">Username</td>
          <td width="386"><label for="m_username"></label>
            <input type="text" name="m_username" id="m_username" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Password</td>
          <td><label for="m_password"></label>
            <input type="password" name="m_password" id="m_password" /></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><input type="submit" name="Save" id="Save" value="ตกลง" />
          &nbsp;<a href="Admin_login.php">Admin</a></td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
