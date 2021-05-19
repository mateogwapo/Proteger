<?php 
	
	  $con=mysqli_connect("localhost","root","","db_system");

	  //checking the connection
  	  if(mysqli_connect_errno())
      {
        echo "Unable to connect to the database : " .mysqli_connect_error();
      }

      $delete_id=$_GET['deleteid'];
      $query= "delete from tbldonorgcat where donOrgCatID='$delete_id'";

      if(mysqli_query($con,$query))
      {
        echo "<script>alert('Details Deleted')</script>";
        echo "<script>location.href='pages/examples/admin_activity.php'</script>";
      }

    else
      {
        echo "Unable to Delete the details";
      }


 ?>