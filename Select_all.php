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

$sql_command="SELECT * from people";

$action=mysqli_query($connection,$sql_command);

while($line = mysqli_fetch_assoc($action)){
   echo "ID: ". $line["id"]."Name: ". $line["name"]."Lastname: ". $line["lastname"]."Telephone: ". $line["telephone"]."Email: ". $line["email"]."Address: ". $line["address"]. "Date/Time: ". $line["meta"]."<hr>; }