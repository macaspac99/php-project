<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dbtest');

if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO tbuser (`fname`,`mname`,`lname`,`email`,`password`) VALUES ('$fname','$mname','$lname','$email','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("Location:../usersdata.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>