<?php 

$con=mysqli_connect("localhost","root","","db_system");
// checking connection
if(mysqli_connect_errno())
	{
		echo "Unable to connect to the database : " .mysqli_connect_error();
	}

	if(isset($_POST['submit']))
		{
			$itemid=$_POST['itemID'];
			$itemname=$_POST['itemName'];
			$itemdescription=$_POST['itemDescription'];
			$itemstock=$_POST['item_stock'];
			$itemcategory=$_POST['category'];
		

		$query="insert into tblitems(itemID,itemName,itemDescription,itemCategory,item_stock, date)
		values('$itemid','$itemname','$itemdescription','$itemcategory','$itemstock', NOW())";

		if(mysqli_query($con,$query))
			{
				echo "<script>alert('Details Inserted')</script>";
				echo "<script>location.href='pages/examples/admin_itemsnew.php'</script>";
			}

		else
			{
				echo "Unable to insert the details";
			}

		}

 ?>