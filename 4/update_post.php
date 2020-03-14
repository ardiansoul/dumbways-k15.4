<?php 
include 'koneksi.php';
$sql = "SELECT * FROM user_tb";
$query = mysqli_query($conn,$sql);


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
			<a class="btn btn-info" href="index.php">menu utama</a>
		</div>
		</div>
	 	<form method="POST" class="form">
 <table width="100%">

		<tr>
		<td><label>Judul</label>
		<td><input type="text" name="title" class="form-control">
		<tr>
		<td>Author</td>
		<td><select name="Author_id" class="form-control">

			<?php while ($row = mysqli_fetch_assoc($query)):?>
			<option value = "<?php echo $row['user_id'] ?> "><?php  echo $row['user_name'] ?></option>

			<?php endwhile ?>
		</select></td>
		<tr>
			<td><label>Content</label></td>
			<td><textarea name="content" class="form-control"></textarea></td>
		</tr>
		<tr><td>
		<td><input type="submit" name="update_post" value="update">
		</tr>



 </table>
 </form>
 </body>
 </html>

<?php 

if (isset($_POST['update_produk'])) {

	$title = $_POST['title'];
	$author = $_POST['Author_id'];
	$content = $_POST["content"];
	$id = $_GET['id'];


$sql = "UPDATE `post_tb` SET `title`= '$title',`createdBy`= '$author',`content`= '$content' WHERE id =".$id;

if (!$query = mysqli_query($conn,$sql)) {
	die(mysqli_error($conn));
} else {
	header("Location: index.php");
}}
 ?>


