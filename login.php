<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: myAccount.php?error=Email is required");
	    exit();
	}else if(empty($password)){
        header("Location: myAccount.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['email'] = $row['user_name'];
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: index.html");
		        exit();
            }else{
				header("Location: myAccount.php?error=Incorrect email or password");
		        exit();
			}
		}else{
			header("Location: myAccount.php?error=Incorrect email or password");
	        exit();
		}
	}
	
}else{
	header("Location: myAccount.php");
	exit();
}