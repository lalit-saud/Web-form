<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>lalit webform</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("button").hide();
  });
  $("#show").click(function(){
    $("button").show();
  });
});
</script>
</head>
<body>

	<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
	<header>
		<h1> Lalit Webform demo.<span style="margin-left: 800px;"><button id="show" onclick="this.innerHTML=Date()">Show now time</button> <button id="hide" onclick="myFunction()">Hide the Time</button></span></h1>

	</header>
	

	<div class="containeer" style="border-radius: 5px">
						<div class="input-section" style="border-radius: 3px">
							<div class="image-section">
								<img src="img/img1.jpg" style="width: 250px; height: 270px;">
							</div>
						<form action="adddata.php" method="post">
							<div class="main">
								<label for="name">Student Name:</label>
								<input style="padding: 4px; width:240px;" type="text" name="name" id="name" required="name" placeholder="Student Name"><br><br>
								<label for="contact">Mobile number:</label>
								<input style="padding: 4px; width:240px;" type="number" name="contact" id="contact" required="contact" placeholder="Mobile number"><br><br>
								<input style="padding: 12px; width:100px; margin-left: 70px;" type="submit" value="save" name="">
							</div>
							
						</form>
						</div>
						
						<div class="output-section" style="border-radius: 3px">

						<table>
							<caption><h2>Srudent info.</h2></caption>
							<tr>
								
								<th>Name </th>
								<th>phone number</th>
								<th>Actions</th>
							</tr>

							<?php 
							include 'db.php';
							$sql = "SELECT * FROM names;";

							$result = mysqli_query($conn, $sql);

							if($result){
								while ($row = mysqli_fetch_assoc($result)) {
									$id = $row['id'];
									$name = $row['name'];
									$phone = $row['phone'];


									?>
										<tr>
											
										<td><?php echo $name  ?></td>
										<td><?php echo $phone  ?></td>
										<td>
											<a href="edit.php?id=<?php echo $id?>">Update</a>
											<a href="delete.php?id=<?php echo $id?>">Delete</a>
										</td>
										</tr>


									<?php
								}
							}


							 ?>


						</table>
						</div>
						<div class="clear"></div>
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

<script>
function myFunction() {
  alert("Are You Seure ... you want to close the Time!!!");
}
</script>

</body>
</html>