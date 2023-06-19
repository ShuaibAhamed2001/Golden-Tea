<?php
session_start();
$itemid = $_GET["id"];
include 'Config.php';

$sql = "SELECT * FROM `item` WHERE `itemid` = '".$itemid."'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_assoc($result)){
    $arrid =  array_column($_SESSION['shopping_cart'], 'itm_id');

        if (!in_array($itemid, $arrid)) {
            $conut = count($_SESSION['shopping_cart']);
            $itm_arr  = array(
                'itm_image' => $row['path'],
                'imt_name' => $row['title'],
                'itm_price' => $_POST['description'],
            );
            $_SESSION['shopping_cart'][$conut] = $itm_arr;

            echo '<script>alert("next Add To cart")</script>';
            echo '<script>window.location="Cart.php"</script>';
        } else {
            echo '<script>alert("All Ready In the Cart")</script>';
            echo '<script>window.location="Cart.php"</script>';
        }
    


  }}

