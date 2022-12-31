<?php
$search = isset($_REQUEST['ProID']) ? $_REQUEST['ProID'] : '';

include_once('../config.php');
$query = "select * from tbl_product where id='$search' ";
$result = mysqli_query($connect, $query) or die('Error :$query' . mysqli_error($connect));
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$img = $row['image'];
	$name = $row['name'];
	$price = $row['price'];
	$cate = $row['category'];
}
$query_detail = "select * from tblpro_detail where id='$search'";
$result_detail = mysqli_query($connect, $query_detail) or die('Error :$query_detail' . mysqli_error($connect));
$row_detail = mysqli_fetch_assoc($result_detail);
?>
<html>

<head>

	<?php
	include_once('../config.php');
	if (isset($_POST['delete'])) {
		include_once("delete.php");
	} else if (isset($_POST['update'])) {
		include_once('../config.php');
		$name1 = $_POST['txtname'];
		$img1 = $_FILES['files']['name'];
		$price1 = $_POST['txtprice'];
		$cate1 = $_POST['txtcate'];
		$folder = "../images/";
		move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img1);
		$sql = "update tbl_product set name='$name1' , image='$img1', price='$price1', category='$cate1' where id='$search'";
		$result = mysqli_query($connect, $sql);
		if (!$result) {
			echo "error";
		}
		include_once("add_pro_detail.php");
		//echo"success";
	} else {
	?>
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

	*, body {
		font-family: 'Poppins', sans-serif;
		font-weight: 400;}
	
	.form-holder {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: center;
		min-height: 100vh;}
	.form-holder .form-content {
		position: relative;
		text-align: center;
		display: -webkit-box;
		display: -moz-box;
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;
		-webkit-justify-content: center;
		justify-content: center;
		-webkit-align-items: center;
		align-items: center;
		padding: 60px;}
	.form-content .form-items {
		border: 3px solid #fff;
		padding: 40px;
		display: inline-block;
		width: 100%;
		min-width: 540px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		text-align: left;
		-webkit-transition: all 0.4s ease;
		transition: all 0.4s ease;}
	</style>
</head>

<body>
<div class="form-body">
            <div class="row">
	<div class="form-holder">
		<div class="form-content">
			<div class="form-items">
	
		<a href="index.php">Home Admin</a><br />
		<table align="center" border="0">
			<tr>
				<td><?php echo "<img src='../images/$img' width=200>" ?></td>
			</tr>
		</table>
		<form method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
			<table border="0">
				<tr>
					<td>Product name</td>
					<td><input type="text" name="txtname" value="<?php echo $name; ?>"></td>
				</tr>
				<tr>
					<td>Image</td>
					<td><input type="file" name="files"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="txtprice" value="<?php echo $price; ?>"></td>
				</tr>
				<tr>
					<td>Category</td>
					<td><input type="text" name="txtcate" value="<?php echo $cate; ?>"></td>
				</tr>

				<tr>
					<td>Developer
					<td><input name="txtdeveloper" type="text" size="50" value="<?PHP echo $row_detail['developer']; ?>" /></td>
				</tr>
				<tr>
					<td>Publisher
					<td><input name="txtpublisher" type="text" size="50" value="<?PHP echo $row_detail['publisher']; ?>" /></td>
				</tr>
				<tr>
					<td>Release Date
					<td><input name="txtredate" type="text" size="50" value="<?PHP echo $row_detail['release_date']; ?>" /></td>
				</tr>
				<tr>
					<td>Genre
					<td><input name="txtgenre" type="text" size="50" value="<?PHP echo $row_detail['genre']; ?>" /></td>
				</tr>
				<tr>
					<td>Description
					<td><input name="txtdescript" type="text" size="50" value="<?PHP echo $row_detail['description']; ?>" /></td>
				</tr>
				<tr>
					<td>Minimum
					<td><input name="txtmini" type="text" size="50" value="<?PHP echo $row_detail['minimum']; ?>" /></td>
				<tr>
					<td>Recommended
					<td><input name="txtrecom" type="text" size="50" value="<?PHP echo $row_detail['recommended']; ?>" /></td>
				<tr>
					<td><input type="submit" name="update" value="Update"></td>
					<td><input type="submit" name="delete" value="Delete"></td>
				</tr>
			</table>
		</form>
	
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
	}
?>
</body>

</html>