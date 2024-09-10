<?php

// connection to data base 
$servername = 'localhost';
$username = 'root';
$password = '';

//creating connection 
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successfull
if (!$conn){
    die("Sorry we fail to connect: <br>". mysqli_connect_error());
} else{
    echo 'Connecton was Successfull  <br>';
}


//creating a data base
$sql =  'CREATE DATABASE forms';
$result = mysqli_query($conn,$sql);

//check for the database creation 
if($result){
    echo 'The DB was created successfully<br>';

}else{
    echo ' The DB creation failed ---> '. mysqli_errno($conn);
}


?>


