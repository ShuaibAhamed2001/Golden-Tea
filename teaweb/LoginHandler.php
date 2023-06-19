<?php session_start();
            if(isset($_POST["btnsubmit"])){
    
                $Email = $_POST["txtEmail"];
                $Password = $_POST["txtPassword"];
                $valid = false;
            
                include 'Config.php';
            
                  $sql = " SELECT * FROM `user` WHERE  `Email` = '".$Email."' and  `Password` = '".$Password."'";
            
                  $result = mysqli_query($con,$sql);
                  
                  if(mysqli_num_rows($result) > 0){
                      $valid = true;
                  } else{
                      $valid = false;
                  }            
                if($valid) {
                  $_SESSION["userName"] = $Email;
                  header("Location:index.php");
                } else {
                  echo "Please check your Username and password";
                }
            }
            ?>