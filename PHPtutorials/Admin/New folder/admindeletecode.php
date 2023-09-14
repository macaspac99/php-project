<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dbtest');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query2 = "DELETE FROM tbadmin WHERE id='$id'";
    $query_run2 = mysqli_query($connection, $query2);

    if($query_run2)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:../adminsdata.php");
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
?>