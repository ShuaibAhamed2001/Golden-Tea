<?php
    if(isset($_POST["btnSubmit"])) {
        $email = $_POST["txtEmail"];
    $Username = $_POST["txtUsername"];
    $contact = $_POST["txtContact"];
    $password = $_POST["txtPassword"];
    
    $con = mysqli_connect("localhost:3306","root","","teadb");

    if(!$con){ 
      die("Could not connect to DB server.Please try again");
    }

              $sql = "INSERT INTO `user`(`Email`, `Username`, `Contact`, `Password`) VALUES ('".$email."','".$Username."','".$contact."','".$password."')";
              mysqli_query($con,$sql);
              header("Location:login.php");
            }
?>