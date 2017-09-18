<?php 
    

    // connect to database
    $con = mysqli_connect('localhost', 'root', '', 'register');
if($con->connect_errno)
{
    echo $con->maxdb_connect_error;
    die();
}
else
{
	echo "database connected";
}


if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $el = $_POST['email'];
    $pword= $_POST['password'];
    $cpassword = $_POST['connfirmpassword'];
    $pn = $_POST['pnumber'];
    
    $sql="INSERT INTO login (username,firstname,lastname,email,password,connfirmpassword,pnumber) VALUES ('$username','$fname','$lname','$el','$pword','$cpassword','$pn')";

if ($con->query($sql)) {

header('location:index.html');
echo "<h1><b>$username Your Account created successfully!!</b></h1>";
echo "Login in your account to continue";
}
else
{
    echo "Inser data fail";
}
}
if (isset($_POST['login'])) {
	$el = $_POST['email'];
    $pword= $_POST['password'];
		if (empty($el)) {
			echo "Email is required";
		}
		if (empty($pword)) {
			echo "Password is required";
		}

		if (!empty('$el') && !empty('$pword')) {
			$pword = md5($pword);
			$query = "SELECT * FROM users WHERE email='$el' AND password='$pword'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) != 1) {
				$_SESSION['el'] = $el;
				$_SESSION['pword'] = $pword;
				header('location: adddata.php');
			}else {
				echo "Wrong email id/password combination";
			}
		}
	}
?>

