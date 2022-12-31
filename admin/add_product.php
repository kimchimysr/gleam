<!DOCTYPE html>
<html>

<head>
	<title>Admin | Add Product</title>
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
			overflow: hidden;
        }


        .form-holder {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 200px;
        }

        .form-holder .form-content {
            position: relative;
            text-align: center;
            display: flex;
            align-items: center;
            padding: 100px;
        }

        .form-content .form-items {
            border: 3px solid #fff;
            padding: 35px;
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
            margin-bottom: 20px;
            margin-top: 0px;
        }

        .form-content h3.form-title {
            margin-bottom: 30px;
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

		.form-content input:hover,
		.form-content input:focus{
			border: 0;
            background-color: ;
            color: red;
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

        .btn-primary {
            background-color: #6C757D;
            outline: none;
            border: 0px;
            border-radius: 5px;
            box-shadow: none;
            cursor: pointer;
            padding: 10px;
            text-transform: uppercase;
        }

        .btn-primary:hover,
        .btn-primary:focus{
            background-color: #495056;
            outline: none !important;
            border: none !important;
            box-shadow: none;
            color: #fff;
        }

		a{
			color: black;
			text-decoration: none;
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
                        <h3>Add Product</h3>
                        <form method="post" action="added_product.php" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label>Product Name:</label><input type="text" name="txtname">
                            </div>

                            <div class="col-md-12">
                                <label>Image: </label><input type="file" name="files">
                            </div>

							<div class="col-md-12">
                                <label>Category: </label>
                                <select class="form-select mt-3" name="txtcate">
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
                                <label>Price:</label><input style="margin-left: 104px;" type="text" name="txtprice">
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary" name="add">add</button>
                                <button id="submit" type="submit" class="btn btn-primary" name="cancel" disabled><a href="index.php">Cancel</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>