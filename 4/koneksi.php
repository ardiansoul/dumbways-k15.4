<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dumb_sosmed';

$conn = mysqli_connect($host,$username,$password);
mysqli_select_db($conn,$dbname);
?>