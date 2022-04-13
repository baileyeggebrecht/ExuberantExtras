<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'EEUserRegistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from UserTable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}else{
    $reg= " INSERT INTO UserTable(name,password) VALUES ('$name','$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
?>