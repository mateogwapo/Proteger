<?php
include 'connect.php';
$user_id = $_SESSION['user_id'];


$username = ($_POST['username']);
$email = ($_POST['email']);
$Contact = ($_POST['contact']);
$FN = ($_POST['firstname']);
$LN = ($_POST['lastname']);
$address = ($_POST['Address']);
$city = ($_POST['City']);
$barangay = ($_POST['Barangay']);
$country = ($_POST['country']);
$postal = ($_POST['postal']);
$occupation = ($_POST['occupation']);
$title = ($_POST['title']);
$workplace = ($_POST['workplace']);
$sql = "UPDATE users SET username = '$username', email='$email', contact='$Contact', firstname='$FN', lastname='$LN', Address='$address', City='$city', Barangay='$barangay', Country='$country', Postal='$postal', Occupation='$occupation', Title='$title', Workplace='$workplace' WHERE id = $user_id;";
if($con->query($sql)==true){
	$_SESSION['name'] = $name;
}
header("location: ../donor/user_profile.php");
?>