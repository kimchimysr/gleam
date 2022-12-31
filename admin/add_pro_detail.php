<?php
	$pro_id=isset($_REQUEST['ProID']) ? $_REQUEST['ProID'] : '';

	$developer=isset($_POST['txtdeveloper']) ? $_POST['txtdeveloper'] : '';
	$publisher=isset($_POST['txtpublisher']) ? $_POST['txtpublisher'] : '';
	$redate=isset($_POST['txtredate']) ? $_POST['txtredate'] : '';
	$genre=isset($_POST['txtgenre']) ? $_POST['txtgenre'] : '';
	$descript=isset($_POST['txtdescript']) ? $_POST['txtdescript'] : '';
	$mini=isset($_POST['txtmini']) ? $_POST['txtmini'] : '';
	$recom=isset($_POST['txtrecom']) ? $_POST['txtrecom'] : '';

	//Database stuff
	include_once("../config.php"); //connection

	$query="SELECT * FROM tblpro_detail WHERE id='$pro_id' ";
	$testresult=mysqli_query($connect,$query) or die("Error, query failed...");
	if(mysqli_fetch_array($testresult) == NULL){
		//insert
		$query="INSERT INTO tblpro_detail(id,developer,publisher,release_date,genre,description,minimum,recommended)
				VALUES('$pro_id','$developer','$publisher','$redate','$genre','$descript','$mini','$recom')";
		$result=mysqli_query($connect,$query) or die("Error, query failed insert...");
		//echo "Insert recom successfully";
		include_once("index.php");
	}else{
		//update
		$query="UPDATE tblpro_detail SET id='$pro_id',developer='$developer',publisher='$publisher',release_date='$redate',genre='$genre', description='$descript',
										 minimum='$mini',recommended='$recom' WHERE id='$pro_id'";
		$result=mysqli_query($connect,$query) or die("Error, query failed update...");
		//echo "Update data successfully";
		include_once("index.php");
	}