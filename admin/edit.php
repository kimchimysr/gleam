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
    <title>Admin | Edit Product</title>
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
        include_once("add_pro_gallery.php");
		//echo"success";
	} else {
	?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

        *,
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;

        }

        html,
        body {
            height: 100%;
            background-color: #152733;
        }


        .form-holder {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: -40px;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: flex;
            align-items: center;
            padding: 60px;
        }

        .form-content .form-items {
            border: 3px solid #fff;
            padding: 6px 35px;
            display: inline-block;
            width: 100%;
            min-width: 540px;
            border-radius: 10px;
            text-align: left;
            
        }

        .form-content h3 {
            color: #fff;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 8px;
            margin-top: 0px;
        }
        img{
            border: 2px solid #fff;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .form-content h3.form-title {
            margin-bottom: 30px;
        }

        .form-content p {
            color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            line-height: 20px;
            margin-bottom: 0px;
        }


        .form-content label
        {
            color: #fff;
            padding: 6px 12px 6px 0px;
        }

        .form-content input[type=text]{
            padding: 9px 42px;
            border-radius: 6px;
            background-color: #fff;
            font-size: 17px;
            font-weight: 300;
            color: black;
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .form-content input[type=file]{
            padding: 9px 120px 9px 4px;
            border-radius: 6px;
            background-color: #fff;
            text-align: center;
            font-size: 17px;
            font-weight: 300;
            color: black;
            margin-left: 86px;
            margin-bottom: 15px;
        }

        .form-content select{
            padding: 9px 247px 9px 38px;
            border-radius: 6px;
            background-color: #fff;
            text-align: left;
            font-size: 17px;
            font-weight: 300;
            color: black;
            margin-left: 58px;
            margin-bottom: 15px;
        }

		.form-content option{
            background-color: #fff;
        }

		.form-content input:hover,
		.form-content input:focus{
			border: 0;
            background-color: ;
            color: red;
		}

        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            border-radius: 5px;
            box-shadow: none;
            cursor: pointer;
            padding: 10px;
            text-transform: uppercase;
			margin-top: 390px;
        }

        .btn-primary:hover,
        .btn-primary:focus{
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
            color: #fff;
        }

        .form-content textarea {
            padding: 8px 67px 8px 43px;
            border-radius: 6px;
            text-align: left;
            background-color: #fff;
            border: 0;
            font-size: 15px;
            font-weight: 300;
            color: black;
            outline: none;
            resize: none;
            height: 120px;
            transition: none;
            margin-bottom: 15px;
        }

        .form-content textarea:hover,
        .form-content textarea:focus {
            border: 0;
            background-color: ;
            color: red;
        }

        a{
            color: black;
        }
        a:hover,
        a:focus{
            color: white;
        }
    </style>
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Edit Product</h3>
                        <div class="col-md-12" align="center">
                            <?php echo "<img src='../images/$img' width=580>" ?>
                        </div>
                        <form method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label>Product Name:</label><input type="text" name="txtname" value="<?php echo $name; ?>">
                            </div>

                            <div class="col-md-12">
                                <label>Cover: </label><input style="margin-left: 90px;" type="file" name="files">
                            </div>
                            <div class="col-md-12">
                                <label>Image1: </label><input style="margin-left: 80px;" type="file" name="image1">
                            </div>
                            <div class="col-md-12">
                                <label>Image2: </label><input style="margin-left: 75px;" type="file" name="image2">
                            </div>
                            <div class="col-md-12">
                                <label>Image3: </label><input style="margin-left: 75px;" type="file" name="image3">
                            </div>
                            <div class="col-md-12">
                                <label>Image4: </label><input style="margin-left: 74px;" type="file" name="image4">
                            </div>

                            <div class="col-md-12">
                                <label>Price:</label><input style="margin-left: 104px;" type="text" name="txtprice" value="<?php echo $price; ?>">
                            </div>

                            <div class="col-md-12">
                                <label>Category: </label>
                                <select class="form-select mt-3" name="txtcate">
                                    <option selected="selected" value="<?php echo $cate; ?>"><?php echo $cate; ?></option>
                                    <option value="Action">Action</option>
                                    <option value="Adventure">Adventure</option>
                                    <option value="RPG">RPG</option>
                                    <option value="Strategy">Strategy</option>
                                    <option value="Open World">Open World</option>
                                    <option value="Shooter">Shooter</option>
                                    <option value="Puzzle">Puzzle</option>
                                    <option value="Simulation">Simulation</option>
                                    <option value="Casual">Casual</option>
                                    <option value="Turn-based">Turn-based</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Platformer">Platformer</option>
                                    <option value="Survival">Survival</option>
                                    <option value="Racing">Racing</option>
                                    <option value="Sports">Sports</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label>Developer:</label><input style="margin-left: 56px;" name="txtdeveloper" type="text" value="<?PHP echo $row_detail['developer']; ?>" />
                            </div>

                            <div class="col-md-12">
                                <label>Publisher:</label><input style="margin-left: 66px;" name="txtpublisher" type="text" value="<?PHP echo $row_detail['publisher']; ?>" />
                            </div>

                            <div class="col-md-12">
                                <label>Release Date:</label><input style="margin-left: 30px;" name="txtredate" type="text" value="<?PHP echo $row_detail['release_date']; ?>" />
                            </div>

                            <div class="col-md-12">
                                <label>Genre:</label><input style="margin-left: 93px;" name="txtgenre" type="text" value="<?PHP echo $row_detail['genre']; ?>" />
                            </div>

                            <div class="col-md-12">
                                <label>Description:</label>
								<textarea style="position: absolute; margin-left: 47px;" name="txtdescript" ><?PHP echo $row_detail['description']; ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <label style="position: absolute; margin-top: 105px;">Minimum:</label>
								<textarea style="position: absolute; margin-top: 112px; margin-left: 164px;" name="txtmini" ><?PHP echo $row_detail['minimum']; ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <label style="position: absolute; margin-top: 247px;">Recommended:</label>
								<textarea style="position: absolute; margin-top: 250px; margin-left: 164px;" name="txtrecom" ><?PHP echo $row_detail['recommended']; ?></textarea>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary" name="update">Update</button>
                                <button id="submit" type="submit" class="btn btn-primary" name="delete">Delete</button>
                                <button id="submit" type="submit" class="btn btn-primary" disabled><a style="text-decoration: none;" href="index.php">Back</a></button>
                            </div>
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