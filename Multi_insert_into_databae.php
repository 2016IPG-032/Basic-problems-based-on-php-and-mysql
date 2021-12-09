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
VALUES(NULL, 'John', 'Smith', 555444, 'mail@server.com','Main Road 12a');";
$sql_command .=" INSERT INTO people(id,name,lastname,telephone,email,address)
VALUES(NULL, 'Samantha', 'Smith', 555423, 'mailSamantha@server.com','Main Road 1123a');";
$sql_command .=" INSERT INTO people(id,name,lastname,telephone,email,address)
VALUES(NULL, 'John', 'Suresh', 553444, 'mail@Johnserver.com','Main Road Suname12')";

//Check sql commands

if(mysqli_multi_query($connection, $sql_command)){
   $last_entry=mysqli_insert_id($connection);
   echo"SQL Command OK, Last ID:", $last_entry;
}
else{

   echo "SQL ERROR ". mysqli_error($connection);
}
