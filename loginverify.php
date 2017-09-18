<?php
$con = mysqli_connect('localhost', 'root', '', 'register');
if($con->connect_errno)
{
    echo $con->maxdb_connect_error;
    die();
}

session_start(); //always start a session in the beginning
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
if (empty($_POST['email']) || empty($_POST['password'])) //Validating inputs using PHP code
{
echo "Incorrect username or password";
} 
$inemail = $_POST["email"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
$inPassword = $_POST["password"];
//echo "$inPassword";
$stmt= $con->prepare("SELECT email,password FROM login WHERE email = ?"); //Fetching all the records with input credentials
$stmt->bind_param("s", $inemail); //You need to specify values to each '?' explicitly while using prepared statements
$stmt->execute();
$stmt->bind_result($emailDB, $PasswordDB);
while($stmt->fetch())
{

}
if($inemail==$emailDB&&$inPassword==$PasswordDB)
{  
$_SESSION['email']=$inemail; //Storing the username value in session variable so that it can be retrieved on other pages
header("location:adddata.php"); // user will be taken to profile page
}
else
{
echo "<h2><b>Incorrect username or password!</b><h2>"; 
}
}
?>
