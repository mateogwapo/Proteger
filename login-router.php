<?php
include 'connect.php';
$success=false;

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='Admin' AND not deleted;");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
}
if($success == true)
{	
	session_start();
	$_SESSION['admin_sid']=session_id();
	$_SESSION['user_id'] = $user_id;
	$_SESSION['role'] = $role;
	$_SESSION['name'] = $name;

	header("location: admin_dashboard.php");
}
else
{
	$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='User' AND not deleted;");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	}
	if($success == true)
	{
		session_start();
		$_SESSION['user_sid']=session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;			
		header("location: user_dashboard.php");
	}
	else
{
	$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password' AND role='Organization' AND not deleted;");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['name'];
	$role= $row['role'];
	}
	if($success == true)
	{
		session_start();
		$_SESSION['user_sid']=session_id();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $name;			
		header("location: org_dashboard.php");
	}
	else
	{
		header("location: login.php");
	}
}
}
?>