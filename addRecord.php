<?php
$db = mysqli_connect('localhost', 'root', '', 'crud');
if($db->connect_errno)
{
    echo $db->maxdb_connect_error;
    die();
}

	//if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['phone']))
	//{
		// include Database connection file 
		

		// get values 
	
		$first_name1 = $_POST['first_name'];
		$last_name1 = $_POST['last_name'];
		$email1 = $_POST['email'];
		$phone1 = $_POST['phone'];

		$sql = "INSERT INTO test (firstname,lastname,emailid,phone) VALUES ('$first_name1', '$last_name1', '$email1','$phone1')";
		if (!$result = mysqli_query($db,$sql)) {
	        exit(mysql_error());

	    }
	   else
	   {
	   echo "1 row added successfully";
	   }
	//}
?>