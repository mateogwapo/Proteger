<?php
include('connect.php');
$id= $_POST['id'];
$photo = $_FILES['photo']['tmp_name'];
$data = file_get_contents($photo);
$base64 = base64_encode($data);

$sql = "UPDATE users SET pic_location = '$base64' WHERE id = '$id'";
$query = $con->query($sql);

if($query)
{
	echo "<script>location.href='pages/examples/user_profile.php'</script>";
}
else
{
	echo $conn->error;
}