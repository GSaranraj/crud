<?php
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

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email Address</th>
							<th>Phone Number</th>
							
							
						</tr>';

	$query= "SELECT * FROM test";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
    //$var=;
   //echo "var";
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result)> 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>

				<td>'.$number.'</td>
				<td>'.$row['firstname'].'</td>
				<td>'.$row['lastname'].'</td>
				<td>'.$row['emailid'].'</td>
				<td>'.$row['phone'].'</td>
				
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
    
?>
<!DOCTYPE html>
<html>
<button onclick="GetUserDetails()" class="btn btn-warning">Update</button><br>
<form action="delete.php">
    <br>
<button  class="btn btn-danger">Delete</button>
</form>
</html>