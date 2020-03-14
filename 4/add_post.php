<?php 
include_once 'koneksi.php';
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
		<div class="header">
			<h1 class="float-left">DumbSocmed</h1>
		<div class="float-right">
			<a class="btn btn-info" href="index.php">Menu Utama</a>
		</div>
	</div>

<form method="post" class="form">
<table width="100%">
<tr>
	<td>Judul</td>
	<td><input type="text" name="title" class="form-control"></td>
</tr>
<tr>
		<td>Author</td>
		<td><select name="Author_id" class="form-control">

			<?php while ($row = mysqli_fetch_assoc($query)):?>
			<option value = "<?php echo $row['user_id'] ?> "><?php  echo $row['user_name'] ?></option>

			<?php endwhile ?>
		</select></td>
		<tr>
<tr><td><label>Content</label></td>
			<td><textarea name="content" class="form-control"></textarea></td>
		</tr>
		<tr><td></td>
			<td><input type="submit" name="kirim" class="btn btn-success"></td>
	</form>	
</tr>

</table>
</body>
</html>

<?php 

if (isset($_POST['kirim'])) {

	$title = $_POST['title'];
	$author = $_POST['Author_id'];
	$content = $_POST["content"];


$sql = "INSERT INTO post_tb (title,content,createdBy) VALUES ('$title','$content','$author')";

if ($query = mysqli_query($conn,$sql)) {
echo "data berhasil dimasukan";
?>
<a href="index.php"> menu utama </a>
<?php 	
} else {
	die(mysqli_error($conn));
}} ?>
