<!DOCTYPE html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","menshop");
$sql="select * from product";
$result=mysqli_query($con,$sql);
if(isset($_POST["add_product"])){
      if(isset($_SESSION["shopping_cart"]))
      {
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
           if(!in_array($_GET["id"], $item_array_id))
           {
                $count = count($_SESSION["shopping_cart"]);
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $item_array;
           }
           else
           {
                echo '<script>alert("สินค้าถูกเพิ่มแล้ว")</script>';
                echo '<script>window.location="cart2.php"</script>';
           }
      }
      else
      {
           $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
           );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
 }
if(isset($_GET['action'])){
  if($_GET['action']=="delete"){
  foreach ($_SESSION['shopping_cart'] as $key => $value) {
    if($value['item_id']==$_GET['id']){
        unset($_SESSION['shopping_cart'][$key]);
        echo '<script>alert("ลบเรียบร้อย")</script>';
        echo '<script>window.location="cart2.php"</script>';
      }
    }
  }
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
    body {
	background-image: url(images/bg.png);
}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
	@media print{
		#hid{
			display:none;
		}
	}
	
    </style>
  </head>
  <body>
    <br><div class="container" style="width:700px">
        <h3 align="center">ตะกร้าสินค้า</h3><br>
        <button class="btn btn-info" onClick="window.print()" id="hid"> พิมพ์ใบเสร็จ </button>
    <?php
        while($row=mysqli_fetch_array($result)){
    ?>
   
    <?php
        }
    ?>
    <br>
    <div style="clear:both;"></div>
    <br>
      <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th>สินค้า</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th>รวม</th>
          <th id="hid">การดำเนินการ</th>
        </tr>
        <?php
          if(!empty($_SESSION["shopping_cart"])){
              $total=0;
              foreach ($_SESSION['shopping_cart'] as $key => $value) { ?>
              <tr>
                <td><?php echo $value['item_name'];?></td>
                <td><?php echo $value['item_quantity'];?></td>
                <td><?php echo number_format($value['item_price'],2);?></td>
                <td><?php echo number_format($value['item_price']*$value['item_quantity'],2);?></td>
                <td id="hid"><a href="cart2.php?action=delete&id=<?php echo $value['item_id'];?>">ลบสินค้า</td>
              </tr>
          <?php
              $total=$total+($value['item_price']*$value['item_quantity']);
              }
          ?>
          <tr>
              <td colspan="3" align="right">ราคารวม</td>
              <td align="right">฿ <?php echo number_format($total, 2); ?></td>
              <td id="hid"></td>
              </tr>
          <?php
          }
        ?>
      </table>
      <table width="700" border="0" cellspacing="0" cellpadding="0" id="hid">
        <tr>
          <td align="center"><div class="col-md-10" style="background-color:#f4f4f4">
      <h3 align="center" style="color:green">
      <span class="glyphicon glyphicon-shopping-cart"> </span>
         confirm cart </h3>
      <form  name="formlogin" action="saveorder.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="name" class="form-control" required placeholder="ชื่อ-สกุล" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <textarea name="address" class="form-control"  rows="3"  required placeholder="ที่อยู่ในการส่งสินค้า"></textarea> 
          </div>
 
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email"  name="email" class="form-control" required placeholder="อีเมล์" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-primary" id="btn">
             ยืนยันสั่งซื้อ </button>
          </div>
        </div>
      </form>
    </div></td>
        </tr>
      </table>
      <p>&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<a href="vitee.php">วิธีแจ้งชำระเงิน</a></p>
      <table width="700" border="0" cellspacing="0" cellpadding="0" id="hid">
        <tr>
          <td>&nbsp;          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="In_men7.php">เสื้อฮาวาย</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="seoy.php">เสื้อยืดคอกลม</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <a href="kov.php">&nbsp;เสื้อยืดคอวี&nbsp;</a> &nbsp;&nbsp; &nbsp;&nbsp; <a href="gun.php">เสื้อกันหนาว</a></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      
      </br>
      <!--<?php echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; ?> -->
    </div>
    </div>
  </body>
</html>
