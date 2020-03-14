<?php include_once 'koneksi.php'; ?>
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
	<div class="main row flex-row">
		<?php 
		$sql = "SELECT * FROM `post_tb`";
		$query = mysqli_query($conn,$sql); ?>
		<?php if (mysqli_num_rows($query)>0): ?>
		<?php while ($row = mysqli_fetch_assoc($query)): ?>
		<div class="flex-colomn col-md-6 float-left">
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo substr($row['content'],0,200); ?>... <a href="view_detail.php?id=<?php echo $row['post_id'] ?>">read more</a></p>
		</div>
		<?php endwhile ?>

		<?php else: ?>
		<?php die(mysqli_error($conn)) ?>
		<p>tidak ada data di tabel</p>
		<?php endif ?>
	</div>
	</div>
</div>
</body>
</html>