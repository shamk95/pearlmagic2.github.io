<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<?php

 
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'juhaina');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}


//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM customer ";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
echo " <br>
<br>
<table id='customers'>
  <tr>
    <th>USER NAME</th>
    <th>PASSWORD</th>
    <th>GENDER</th>
  </tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['password'] . "</td><td>" . $row['gender'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML


?>




