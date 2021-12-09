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

$sql_command ="CREATE TABLE people(

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name  VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
telephone INT ,
email VARCHAR(100),
address varchar(100),
meta TIMESTAMP

)";


//Check sql commands

if(mysqli_query($connection, $sql_command)){
   echo"SQL Command OK";
}
else{

   echo "SQL ERROR ". mysqli_error($connection);
}
