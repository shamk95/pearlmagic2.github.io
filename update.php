
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body >
<br>
<br>
<br>
<br>
<br>

<div class="container">
 <center> <h1 style="color:#1a8cff;">Change Password</h1></center>
  <form action ="update.php">
    <div class="form-group">
      <label for="email">User Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter User Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
	
 
    <button type="submit" class="btn btn-primary">Submit</button>
		<br>
	<br>
	<A HREF="page3.html"<button type="button" class="btn btn-primary">SIGN IN AGIN</button></a>
  </form>
</div>

</body>
</html>


<?php

$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'juhaina');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
if (isset($_POST['name']) and isset($_POST['pwd'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['name'];
$password = $_POST['pwd'];
//3.1.2 Checking the values are existing in the database or not
$query = "UPDATE customer SET   password='$password' where name='$username'";

 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.



echo "<h2> Your Name is '$username' ". "      "."your  New Password is '$password'<h2>";

}









?>