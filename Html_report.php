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

echo"<h1> Results: </h1>";
echo "<table width=80% cellspan=2 border=1px><tr bgcolor='yellow'>";
echo "<td>ID</td>";
echo "<td>Name</td>";
echo "<td>LastName</td>";
echo "<td>Telephone</td>";
echo "<td>Email</td>";
echo "<td>Address</td>";

while($line= mysqli_fetch_assoc($action)){

   echo "<tr><td> " . $line["id"] .
   "</td><td> " . $line["name"] .
   "</td><td> "  . $line["lastname"] .
   "</td><td> " . $line["telephone"] .
   "</td><td> "  . $line["email"] .
   "</td><td> "  . $line["address"] ."</tr>";
}

echo"</table>";