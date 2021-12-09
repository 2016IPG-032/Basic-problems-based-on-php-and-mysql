<?php
$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$address=$_POST['address'];

$server="localhost";
$user="root";
$password="";
$database="address_book";


$connection= mysqli_connect($server,$user,$password, $database); 


//checked


if(!$connection){
  
   die("<h2>Total Failed</h2>". mysqli_connect_error());

}
else{
   echo" connection successfull<br>";
}


//SQL Command

$sql_command =" INSERT INTO people(id,name,lastname,telephone,email,address)
VALUES($id, '$name', '$lastname', $telephone, '$email','$address')";

//Check sql commands

if(mysqli_query($connection, $sql_command)){
   
   echo"SQL Command OK";
}
else{

   echo "SQL ERROR ". mysqli_error($connection);
}
