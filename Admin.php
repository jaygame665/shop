<?php require_once('Connections/menshop.php'); ?>
<?php include("Upload.php"); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "1";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "In_men.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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
  $insertSQL = sprintf("INSERT INTO product (prd_img, prd_name, prd_price, prd_detail) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString(Upload($_FILES['prdImg']), "text"),
                       GetSQLValueString($_POST['prdName'], "text"),
                       GetSQLValueString($_POST['prdPrice'], "text"),
                       GetSQLValueString($_POST['prdDetail'], "text"));

  mysql_select_db($database_menshop, $menshop);
  $Result1 = mysql_query($insertSQL, $menshop) or die(mysql_error());

  $insertGoTo = "In_men5.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "addprd")) {
  $insertSQL = sprintf("INSERT INTO tbl_product (p_name, p_detail, p_price, p_img) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['p_name'], "text"),
                       GetSQLValueString($_POST['p_detail'], "text"),
                       GetSQLValueString($_POST['p_price'], "double"),
                       GetSQLValueString($_POST['p_img'], "text"));
                    

  mysql_select_db($database_menshop, $menshop);
  $Result1 = mysql_query($insertSQL, $menshop) or die(mysql_error());
}

mysql_select_db($database_menshop, $menshop);
$query_Recordset1 = "SELECT * FROM tm_member";
$Recordset1 = mysql_query($query_Recordset1, $menshop) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
</head>

<body>
<table width="700" align="center">
  <tr>
    <td height="248"><img src="images/menshop_01.jpg" width="1024" height="246" /></td>
  </tr>
</table>
<table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="153"><a href="Aing.php"><img src="images/menshop_02.jpg" width="153" height="58" /></a></td>
    <td width="188"><a href="gig.php"><img src="images/menshop_03.jpg" width="188" height="58" /></a></td>
    <td width="174"><a href="vitee.php"><img src="images/menshop_04.jpg" width="174" height="58" /></a></td>
    <td width="176"><a href="Login.php"><img src="images/menshop_05.jpg" width="176" height="58" /></a></td>
    <td width="145"><a href="titto2.php"><img src="images/menshop_06.jpg" width="165" height="58" /></a></td>
    <td width="65"><a href="Aboutweb.php"><img src="images/menshop_07.jpg" width="168" height="58" /></a></td>
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
        <td><a href="cart2.php"><img src="images/menshop_09.jpg" width="280" height="93" /></a></td>
      </tr>
      <tr>
        <td><a href="In_men7.php"><img src="images/menshop_12.jpg" width="280" height="61" /></a></td>
      </tr>
      <tr>
        <td><a href="seoy.php"><img src="images/menshop_13.jpg" width="280" height="72" /></a></td>
      </tr>
      <tr>
        <td><a href="kov.php"><img src="images/menshop_14.jpg" width="279" height="73" /></a></td>
      </tr>
      <tr>
        <td><a href="gun.php"><img src="images/menshop_16.jpg" width="279" height="74" /></a></td>
      </tr>
      <tr>
        <td><img src="images/menshop_17.jpg" width="280" height="78" /></td>
      </tr>
    </table>      &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</td>
    <td width="744" align="center" valign="top"><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="images/Admin-resized-2.jpg" width="192" height="108" /></td>
      </tr>
    </table>
      <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
        <p>เพิ่มข้อมูลสินค้า</p>
        <p>
          <label for="prdName">ชื่อสินค้า</label>
          <input type="text" name="prdName" id="prdName" />
          <br />
          <label for="prdPrice">ราคาสินค้า</label>
          <input type="text" name="prdPrice" id="prdPrice" />
          <br />
          <label for="prdDetail">รายละเอียดสินค้า</label>
          <textarea name="prdDetail" id="prdDetail" cols="45" rows="5"></textarea>
          <br />
          <label for="prdImg">รูปสินค้า</label>
          <input type="file" name="prdImg" id="prdImg" />
          <br />
          <input type="submit" name="prdSave" id="prdSave" value="บันทึก" />
        </p>
        <input type="hidden" name="MM_insert" value="form1" />
      </form>
      <p>&nbsp;</p>
    
    </tr>
</table>
<p>&nbsp;</p>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
