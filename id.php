	<?php
$user_id=$_SESSION['user_id'];
$sql = mysqli_query($con, "SELECT * FROM userid where user_id = $user_id");
?>