<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dbtest');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM tbuser WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    $query2 = "DELETE FROM tbadmin WHERE id='$id'";
    $query_run2 = mysqli_query($connection, $query2);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:../hello.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
    if($query_run2)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:../hello.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }

?>