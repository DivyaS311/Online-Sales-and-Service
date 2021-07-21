<?php
session_start();
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "dns";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);

$name = $_POST['name'];
$price = $_POST['price'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO items (name, price,image) VALUES ('$name', $price,'$image')";
$con->query($sql);







$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dns');

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST['name'];
    $price = $_POST['price'];

    $query = "INSERT INTO `items`(`image`,`name`,`price`) VALUES ('$file','$name','$price')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Image profile Uploaded") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Image profile not Uploaded") </script>';
    }
}

header("location: ./admin-page.php");

?>  
