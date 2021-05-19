<?php
include 'connect.php';
include 'id.php';
$total = 0;
$address = htmlspecialchars($_POST['Address']);
$name=$_POST['donorName'];
$contact=$_POST['Age'];
$email=$_POST['Email'];
$age=$_POST['Address'];
$sex=$_POST['Sex'];

   $sql = "INSERT INTO tbldonor (donorID, donorName, Age, Sex, Address, Contact, Email) VALUES ($user_id, '$name', '$age', '$sex', '$address', '$contact', '$email')";
   if ($con->query($sql) === TRUE){
      $order_id =  $con->insert_id;
      foreach ($_POST as $key => $value)
      {
         if(is_numeric($key)){
         $result = mysqli_query($con, "SELECT * FROM tblitems WHERE id = $key");
         while($row = mysqli_fetch_array($result))
         {
            
         }
            
         $sql = "INSERT INTO tbldonated (donateID, goods, quantity) VALUES ($order_id, $key, $value)";
         $con->query($sql) === TRUE;      
         }
      }
         header("location: matching-result.php");
   }

?>