<?php 

$con=mysqli_connect("localhost","root","","db_system");
// checking connection
if(mysqli_connect_errno())
	{
		echo "Unable to connect to the database : " .mysqli_connect_error();
	}

	if(isset($_POST['submit']))
		{
			$CategoryID=$_POST['id'];
			$categoryname=$_POST['categoryname'];
			$categorydesc=$_POST['category_desc'];

		

		$query="insert into tblcategoryforitems (id,categoryname,category_desc, date)
		values('$CategoryID','$categoryname','$categorydesc', NOW())";

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