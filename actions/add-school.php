<?php

$name = mysqli_real_escape_string($conn, $_POST['val-username2']);
$email =mysqli_real_escape_string($conn, $_POST['val-email2']);
    $pass = mysqli_real_escape_string($conn, $_POST['val-password2']);
$tel = mysqli_real_escape_string($conn, $_POST['val-digits2']);
$location = $_POST['val-skill2'];

$password = sha1($pass);

$query = "INSERT INTO schools (name, email, password,tel,location) VALUES('$name', '$email', '$password', $tel, '$location')";
$res = mysqli_query($conn, $query);
if($res){
    $message = "<div class='alert alert-success'> School successfully registered</div>";
}else{
    $message = "<div class='alert alert-danger'>There was a problem registering the school".mysqli_error($conn)."</div>";
}

?>
