<!DOCTYPE html>
<html>
<head>
	<title>lalit webform</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header><h1> Lalit Webform demo.</h1></header>
<div class="input-edit-data">
<h2 style="color: #fff; font-weight:900">Update Contact:</h2>

<?php

include 'db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM names WHERE id = ".$id;

$result = mysqli_query($conn, $sql);

if ($result) {
	$row = mysqli_fetch_assoc($result);
	$connectname = $row['name'];
	$connectphone = $row['phone'];

	
}


?>


<form action="editaction.php" method="post">
	<div style="height:175px;" class="main">
		<label style="color: #fff; font-weight: 700;" for="name">Name:</label>
		<input style="padding: 4px; width:240px; margin-left: 15px;" type="text" name="name" id="name" value="<?php global $connectname; echo $connectname    ?>" required="name"><br><br>
		<label style="color: #fff; font-weight: 700;" for="contact">Number:</label>
		<input style="padding: 4px; width:240px;" type="number" name="contact" id="contact" value="<?php global $connectphone; echo $connectphone    ?>" required="contact"><br><br>
		<input type="hidden" name="id" id="id" value="<?php global $id; echo $id    ?>" required="id">
		<input style="padding: 12px; width:100px; margin-left: 120px; margin-top: 20px; background-color: #1daced; color: #fff; font-weight: 700;" type="submit" value="Update" name="">
	</div>
	
</form>
</div>

<footer>

	<div class="cookie-container">
				      <p>
				        We use cookies in this webform to give you the best experience on our
				        form and show you relevant ads. To find out more, read our
				        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
				      </p>

				      <button class="cookie-btn">
				        Okay
				      </button>
				    </div>
   					 <script src="main.js"></script>
	
</footer>


</body>
</html>