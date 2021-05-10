<?php
$conn = mysqli_connect($server , $username , $password , $dbname) ;



$username = $_POST['username'];
$password = $_POST['password'] ;

$sql = "INSERT INTO form( username , password) VALUES ('$name' , '$password')" ;

if(!mysqli_query($con, $sql)) {
    echo"Data has not saved ."
}else{
    echo"Data has saved succesfully ."   
}


?>