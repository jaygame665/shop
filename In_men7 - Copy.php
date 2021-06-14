<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$con = mysqli_connect("localhost","root","","menshop");
mysqli_set_charset($con,"utf8");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>This shop for men</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    <td width="280" height="470" valign="top"><table width="100" border="0" cellspacing="0" cellpadding="0">
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
    <td width="744" valign="top"><table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">

<div class="container" style="width:700px;height:700px">

<img src="images/Untitled-2.jpg" width="744" height="70" />
<?php
$result = mysqli_query($con,"select * from product Where prd_status = 1");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	?>

    <div class="col-md-6" >

        <form method="post" action="cart2.php?action=add&id=<?php echo $row['id'];?>">
        <div style="border:1px solid #333;background-color:white;border-radius:px;padding:1px;margin:1px">
          <img src="products-img/<?php echo $row['prd_img'];?>" width="120" class="img-responsive" /><br>
          <h4 class="text-info">สินค้า : <?php echo $row['prd_name'];?></h4>
          <h4 class="text-danger">ราคา: <?php echo $row['prd_price'];?> บาท</h4>
          <h4 class="text-success">Size : S   &nbsp; M&nbsp;&nbsp; L   &nbsp; XL</h4>
          <input type="text" name="quantity" class="form-control" value="1"/>
          <input type="hidden" name="hidden_name" value="<?php echo $row['prd_name'];?>"/>
          <input type="hidden" name="hidden_price" value="<?php echo $row['prd_price'];?>"/>
        </div>
        </form>
    </div>
    <?php } ?>
        </td>
      </tr>
    </table>

    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
