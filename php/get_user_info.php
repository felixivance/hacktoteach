<?php
$email = $_SESSION['email'];
$q = "SELECT * FROM admin WHERE email='$email' LIMIT 1";
$r = mysqli_query($conn, $q);

$data = mysqli_fetch_assoc($r);

?>