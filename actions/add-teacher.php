<?php

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname =mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['val-email2']);
$tel = mysqli_real_escape_string($conn, $_POST['val-digits2']);
$idno = mysqli_real_escape_string($conn, $_POST['id_no']);
$location = $_POST['val-skill2'];
$duration = $_POST['duration'];



$query = "INSERT INTO teachers (id_no, fname, lname,email,duration, credit_score) VALUES($idno, '$fname', '$lname', '$email',$duration, 1)";
$res = mysqli_query($conn, $query);
if($res){
    $message = "<div class='alert alert-success'> Teacher successfully registered</div>";
}else{
    $message = "<div class='alert alert-danger'>There was a problem registering the teacher".mysqli_error($conn)."</div>";
}

?>
