<?php

$name = $_POST['name'];
$phone = $_POST['contact'];

echo("name is".$name ."phone number is" .$phone);

include 'db.php'; 

$sql = "INSERT INTO names(name, phone)VALUES('$name','$phone')";
$result = mysqli_query($conn, $sql);
if($result){
	header('location:index.php');
}

?>