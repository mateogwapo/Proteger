<?php
include 'connect.php';
include 'orgid.php';
$total = 0;
$address = htmlspecialchars($_POST['Address']);
$name=$_POST['organizationName'];
$barangay=$_POST['Barangay'];
$email=$_POST['Email'];
$city=$_POST['City'];
$contact=$_POST['Contact'];
$date=$_POST['Date'];



   $sql = "INSERT INTO tblorganization (orgID, organizationName, Address, Barangay, City, Contact, Email, Date) VALUES ($user_id, '$name', '$address', '$barangay', '$city', '$contact', '$email', NOW())";
   if ($con->query($sql) === TRUE){
      $order_id =  $con->insert_id;
      foreach ($_POST as $key => $value)
      {
         if(is_numeric($key)){
         $result = mysqli_query($con, "SELECT * FROM tblitems WHERE itemName = $key");
         while($row = mysqli_fetch_array($result))
         {
            
         }
            
         $sql = "INSERT INTO tblrequest (requestID, goods, quantity) VALUES ($order_id, $key, $value)";
         $con->query($sql) === TRUE;      
         }
      }
         header("location: ../requestor/healthcenter-request.php");
   }

?>