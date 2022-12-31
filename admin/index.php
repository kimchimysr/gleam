<?php
session_start();
include_once('../config.php');
if (isset($_POST['delete'])) {
	include_once("delete.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Panel</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style>
		body{background-color: #e7f2ff;}

		h2 { 
    		color: #63abfe;
			font-family: 'Raleway',sans-serif;
			font-size: 40px;
			font-weight: 800;
			line-height: 80px;
			margin: 0 0 24px;
			text-align: center;
			text-transform: uppercase;
			text-shadow: 3px 3px 2px lightgray;}

		h3 {
			color: #5d5d5d;
			font-family: 'Raleway',sans-serif;
			font-size: 30px;
			font-weight: 800;
			line-height: 80px;
			margin: 0 0 24px;
			text-align: center;
			text-transform: uppercase;
		}

		.add {
			color: #494949 !important;
			font-family: sans-serif;
			font-size: 12px;
			font-weight: bold;
			text-transform: uppercase;
			text-decoration: none;
			background: white;
			padding: 10px;
			border: 1px solid black !important;
			border-radius: 5px;
			transition: all 0.4s ease 0s;
			cursor: pointer;
			margin-left: 15px;}
		
		.add:hover {
			color: #ffffff !important;
			background: #6aa5fd;
			border-color: #6aa5fd !important;
			transition: all 0.4s ease 0s;}
		#btn {
			margin-left: 0px;
			margin-top: 0px;
			padding-left: 20px;
			padding-right: 20px;
		}
	</style>
</head>

<body>
	<br />
	<div class="container">
		<br />
		<h2 align="center">Admin Page</h2>
		<h3 align="center">List of Product</h3><br />
		<a href="add_product.php"><button class="add" style="margin-bottom: -20px;">Add New Product</button></a><br><br>
		<?php
		$query = "SELECT * FROM tbl_product ORDER BY id ASC";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
		?>
				<div style="padding-bottom: 10px;"class="col-md-4" >
					<form method="post" style="margin-right: -20px;" action="index.php?action=add&ProID=<?php echo $row["id"]; ?>">
						<div style="border:1px solid black; background-color: white; border-radius:5px; padding:10px;" align="center">
							<img src="../images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

							<h4 class="text-info" style="margin-top: -8px; color: black; text-align: left;"><?php echo $row["name"]; ?></h4>

							<h4 class="text-danger" style="margin-top: -6px; text-align: left;">$ <?php echo $row["price"]; ?></h4>

							<!--<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />-->

							<a href='edit.php?ProID=<?php echo $row["id"]; ?>'><input class="add" id="btn" style="position: absolute; left: 27px;" type="button" name="update" class="btn btn-success"  value="Edit" /></a>

							<input class="add" id="btn" style="margin-right: 110px;" type="submit" name="delete" style="margin-top:5px;" class="btn btn-success" value="Delete" />

						</div>
					</form>
				</div>
		<?php
			}
		}
		?>
</body>

</html>