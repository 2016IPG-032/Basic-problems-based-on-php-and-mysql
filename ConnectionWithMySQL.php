<?php

$server="localhost";
$user="root";
$password="";


$connection= mysqli_connect($server,$user,$password); 


//checked


if(!$connection){
  
   die("<h2>Total Failed</h2>". mysqli_connect_error());

}
else{
   echo" connection successfull";
}



?>
