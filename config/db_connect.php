<?php 

$conn = mysqli_connect('localhost' , 'amir' , 'test123' , 'ninja_pizza');

//chechk the connection

if(!$conn){
    echo 'there is a error:' . mysqli_connect_error();
}


?>