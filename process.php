<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
    $fname 		= $_POST['fname'];
    $mname 		= $_POST['mname'];
    $lname 		= $_POST['lname'];
    $address 	= $_POST['address'];
    $bday 		= $_POST['bday'];
    $number 	= $_POST['number'];
    $email 		= $_POST['email'];
    $password 	= $_POST['password'];

$sql = "INSERT INTO dbtest.tbuser (fname, mname, lname, address, bday, number, email, password) VALUES (?,?,?,?,?,?,?,?)";
$stminsert = $db->prepare($sql);
$result = $stminsert->execute([$fname, $mname, $lname, $address, $bday, $number, $email, $password]);
//$result = $stminsert->execute([$fname, $mname, $lname, $address, $bday, $gender, $number, $email, $password]);
if($result){
    echo 'Successfully Saved!';
}
else{
    echo 'There were errors while saving the data.';
}
}else{
    echo 'No Data';
}
?>