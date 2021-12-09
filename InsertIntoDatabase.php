<?php

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
VALUES(NULL, 'Samantha', 'Fox', 555444, 'mail@server.com','Main Road 12a')";

//Check sql commands

if(mysqli_query($connection, $sql_command)){
   
   echo"SQL Command OK";
}
else{

   echo "SQL ERROR ". mysqli_error($connection);
}
