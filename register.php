<?php
 header("location:page3.html");


 $username =$_POST['name'];
 $password =$_POST['pwd'];
 $gender =$_POST['gender'];


try{
//$dbh = new PDO("mysql:host=localhost;dbname=dbtoys", "root", "");
//$dbh=new PDO("mysql:localhost;dbname=dbtoys", "root","");
$dbh = new PDO("mysql:host=localhost;dbname=juhaina", "root", "");
   $query="INSERT INTO customer(name,password,gender)VALUES('$username',$password,'$gender')";
   
 $affected = $dbh->exec($query);

	 echo '';
	 $dbh=null;
	 }
catch(PDOException $e)
{
echo $e->getMessage();
}




?>