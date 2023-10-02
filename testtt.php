<?php
//create a code to take the email and check if it is in the database
//if it's in the database redirect the user to index.html
//if it's not in the database redirect the user to login_form.php

@include 'config.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result) > 0){
    header('location:index.html');}
else{
    header('location:login_form.php');
}




// Path: testtt.php
?>