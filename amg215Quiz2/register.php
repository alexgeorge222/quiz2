<?php
session_start();
$firstName= $_POST['inputfName'];
$lastName = $_POST['inputlName'];
$email = $_POST['InsertEmail'];
setcookie("FirstNameCookie",$firstName);
setcookie("LastNameCookie",$LastName);
setcookie("EmailCookie",$emailName);
?>