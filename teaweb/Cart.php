<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add To Cart</title>
<link rel="stylesheet" type="text/css" href="css\Cart.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="user" style="float:right; margin-top: 2%;"> <!-- Open user div -->
            <a href="Home_page.php"><button type="button"> Home</button></a>        &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="login.php"><button type="button">Login</button></a>            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Menu.php"><button type="button">Menu</button></a>              &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="register.php"><button type="button">Register</button></a>      &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="cart.php"><button type="button">Cart</button></a>              &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="about.html"><button type="button">About</button></a>           &nbsp;&nbsp;&nbsp;&nbsp;
</div>
        <br><br><br><br><br><br>
        <center><h1>Add to Cart</h1></center>

        <?php
        error_reporting(0);
        session_start();
        if (!empty($_SESSION['shopping_cart'])) {
        foreach ($_SESSION['shopping_cart'] as $keys => $values) {

        $name = $values['imt_name'];
        $image = $values['itm_image'];
        $price = $values['itm_price'];  
?>   
<hr><div class="small-container cart-page">
            <table>
                <tr>
                    <th><?php echo $name ?></th>
                    <th>Quantity</th>
                </tr>
                <tr><td><div class="cart-info">
                        <img src="<?php echo $image ?>" width="130px" height="160px">
                            <div>
                                <h3>Price :LKR<?php echo $price ?></h3><br>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="text" name="QtyTxt" id="QtyTxt" value="" readonly> 
                    </td>
                </tr>
            </table>
          <?php  }}  ?>
    </div>
<br>
</body>
</html>