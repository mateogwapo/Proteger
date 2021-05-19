<?php
session_start();

$fn = "";
$ln = "";
$email = "";
$password = "";

$db = mysqli_connect('localhost','root','','db_system');

if (isset($_POST['submit'])) {
	$fn = mysqli_real_escape_string($db, $_POST['fn']);
	$ln = mysqli_real_escape_string($db, $_POST['ln']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($fn)) { array_push($errors, "First Name is required"); }
	if (empty($ln)) { array_push($errors, "Last Name is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

	$user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$user = mysqli_fetch_assoc($result);

	if ($user) {
		if ($user['email'] === $email) {
			array_push($errors, "Email already exists");}
}

	if (count($errors) == 0) {
		$query = "INSERT INTO users (firstname, lastname, email, password, date) 
					VALUES('$fn', '$ln', '$email', '$password', now())";
		mysqli_query($db, $query);
		
		header('location: login.php');
	}
}

?>