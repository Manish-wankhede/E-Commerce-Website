<?php
$uname = $_POST['username'];
$upass1 = $_POST['password1'];
$upass2 = $_POST['password2'];
$utype = $_POST['usertype'];

// echo $uname."-".$upass1."-".$upass2."-".$utype;

//NEVER TRUST UI VALIDATION
if($upass1!=$upass2){
    echo "Password Mismatch";
    die;
}

// $conn = new mysqli("localhost","root","","acme24_feb",3307);
include_once "connection.php";

// HASH Password using MD5 or SHA
$cipher_pass=md5($upass1);

$status = mysqli_query($conn,"insert into user(username,password,usertype) values('$uname','$cipher_pass','$utype')");

if($status){
    echo "Registration Successfull";
    // Redirect to login page
}
else{
    echo mysqli_error($conn);
}

// HTML+CSS+JS+PHP+DB
?>