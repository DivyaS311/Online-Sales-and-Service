<?php
$user_id=$_SESSION['user_id'];
$sql = mysqli_query($con, "SELECT * FROM info where customer_id = $user_id");
while($row1 = mysqli_fetch_array($sql)){
$info_id = $row1['id'];
}
$sql = mysqli_query($con, "SELECT * FROM order_info where info_id = $info_id");
while($row1 = mysqli_fetch_array($sql)){

}
?>