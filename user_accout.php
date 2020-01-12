<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'useraccount');
$mail_id = $_POST['mail_id'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$contactNumber = $_POST['contactNumber'];

$auth = "select mail_id, password from useraccout where mail_id = '$mail_id";
$result = mysqli_query($con, $auth);
$chk = mysqli_num_rows($result);

if($chk == 1){
    echo "Account already exist.";
} else {
    $reg = "insert into useraccout(First_Name, Last_Name, Contact, Mail_ID, Password) values ('$firstName', '$lastName','$contactNumber', '$mail_id', '$password')";
    mysqli_query($con, $reg);
    echo "Registrsation Successful";
}
?>