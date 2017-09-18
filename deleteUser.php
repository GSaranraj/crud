<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    $db = mysqli_connect('localhost', 'root', '', 'crud');
if($db->connect_errno)
{
    echo $db->maxdb_connect_error;
    die();
}
else
{
    echo "database connected";
}

    // get user id
    $user_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM test WHERE id = '$user_id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
    else
    {
       echo "1 row deleted successfully";
       header('location: adddata.php');
    }
}
?>