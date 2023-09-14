<?php 
require_once('config.php');


$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM dbtest.tbadmin WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email, $password]);

if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
        echo 'Login Sucess, redirecting...';
    }else{
        echo 'No data from database!';
    }
}else{
    echo 'Error';
}
?>