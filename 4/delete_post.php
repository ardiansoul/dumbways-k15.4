<?php 
include_once('koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM post_tb WHERE post_id =".$id;

$query = mysqli_query($conn,$sql);
if (!$query) {
 	die(mysqli_error($conn));
 } ?>
<!DOCTYPE html>
<html>
<head>
	<title>dumb sosmed</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<h1 class="float-left">DumbSocmed</h1>
		<div class="float-right">
			<a class="btn btn-info" href="add_post.php">Add Post</a>
		</div>
	</div>
 <a href="index.php" class="btn btn-info">kembali</a>
