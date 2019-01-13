<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<style>';
echo '.button {
    background-color: #ff4000; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 120px 480px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}';
echo '.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}';
echo '</style>';
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
$query = "SELECT * FROM customer WHERE name='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);


	

while($row = mysqli_fetch_array($result)) {

	if(($row['name']==$username)){
	echo header("location:https://www.instagram.com/pearl_magic/");
	}
else {echo header("location:page3.html");}	



}


if (isset($_SESSION['name'])){
$username = $_SESSION['name'];
echo "Hi " . $username . " ";
echo header("location:https://www.instagram.com/pearl_magic/");
}
else{
echo '<a href="page3.html"><button class="button button2">Sorry,Failed to login </button></a>';}

	  }
	  
	  ?>
	  