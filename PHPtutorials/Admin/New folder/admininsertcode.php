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

    $query2 = "INSERT INTO tbadmin (`fname`,`mname`,`lname`,`email`,`password`) VALUES ('$fname','$mname','$lname','$email','$password')";
    $query_run2 = mysqli_query($connection, $query2);

    if($query_run2)
    {
        echo '<script> alert("Data Saved"); </script>';
        header("Location:../adminsdata.php");
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>