<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$mobileno = $_POST["mobileno"];
	

	$conn = mysqli_connect("localhost","root","","form") or die("Connection Error: " . mysqli_error($conn));
	$result=mysqli_query($conn, "$INSERT INTO 'details' ('name','email','mobileno') VALUES ('" . $name. "', '" . $email. "','" . $mobileno. "')",);
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
//require_once "contact-view.php";
?>