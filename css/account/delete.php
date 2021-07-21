<?php

// php code for delete from mysql database


	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection, 'dns');


if(isset($_POST['delete']))
{
	$id = $_POST['id'];

	$query = "DELETE FROM `items` WHERE `id` = $id";

	$result = mysqli_query($connection,$query);

	if ($result)
	{
		echo 'Data Deleted';
	}
	else
	{
		echo 'Data Not Deleted';
	}
	mysqli_close(connect);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="php_delete_data_from_mysql_database.php" method="post">
	ID TO DELETE:&nbsp;<input type="text" name="id" required><br><br>
	<input type="submit" name="delete" value="Clear Data">
</form>
</body>
</html>
