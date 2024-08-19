<?php
SESSION_START();
$email = $_POST['email'];
$password = $_POST['password'];

if (strpos($email, "admin@gmail.com") !== FALSE && strpos($password, "12345") !== FALSE) {
		$_SESSION['status'] = TRUE;
		$_SESSION['email'] = $email;
		Header("Location: ../admin/admin.php");
} else if (strpos($email, "user@gmail.com") !== FALSE && strpos($password, "12345") !== FALSE){
		$_SESSION['status'] = TRUE;
		Header("Location: ../user/user.php");
		$_SESSION['email'] = $email;
} else {
		$_SESSION['error'] = "INVALID EMAIL";
		Header("Location: ../index.php");
}
?>