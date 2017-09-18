<?php
// include Database connection file
$db = mysqli_connect('localhost', 'root', '', 'crud');
if($db->connect_errno)
{
    echo $db->maxdb_connect_error;
    die();
}

// check request
if(isset($_POST['save']))
{
    
   $id=$_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
     
    // Updaste User details
    $query = "UPDATE test SET firstname = '$first_name', lastname = '$last_name', emailid = '$email',phone='$phone'  WHERE id = '".$id."'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
    else
    {
        echo "<center><b><h1>Data updated successfully!!</h1><b></center>";
    }
}