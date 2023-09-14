<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dbtest');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query2 = "UPDATE tbadmin SET fname='$fname',mname='$mname', lname='$lname', email='$email', password='$password' WHERE id='$id'  ";
        $query_run2 = mysqli_query($connection, $query2);

        if($query_run2)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:../adminsdata.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>