<?php 
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.createdBy = user_tb.user_id INNER JOIN comment_tb ON post_tb.post_id = comment_tb.postId WHERE post_id = $id";
$query = mysqli_query($conn,$sql);
if (mysqli_fetch_assoc($query)>0) {
$row = mysqli_fetch_assoc($query);	
} else {
	die(mysqli_error($conn));
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>DumbSocmed</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
		<div class="header clearfix">
			<h1 class="float-left">DumbSocmed</h1>
		<div class="float-right">
			<a class="btn btn-success" href="update_post.php?id=<?php echo $id; ?>">update Post</a>
			<a class="btn btn-danger" href="Delete_post.php?id=<?php echo $id; ?>">Delete Post</a>
		</div>
		</div>
	<div class="main">
	<h2 class="title"><?php echo $row['title']; ?></h2><br>
	<span class="author">Author : <?php echo $row['user_name']; ?></span>
	<p class="content"><?php echo $row['content']; ?></p>
	</div>

<div class="comment">
	<h3>Comment</h3>
	<ul>
	<?php 
	$sql = "SELECT * FROM comment_tb where postId = $id";
	$query = mysqli_query($conn,$sql);
	if (mysqli_fetch_assoc($query)>0) {
	while($row = mysqli_fetch_assoc($query)): ?>
	<li><?php echo $row['comment'] ?></li>
	<?php endwhile; ?>
	<?php } ?>
</ul>	
</div>
</div>
</body>
</html>



