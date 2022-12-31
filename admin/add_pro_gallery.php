<?php
	$pro_id=isset($_REQUEST['ProID']) ? $_REQUEST['ProID'] : '';

	$folder="../images/gallery/";
    $img1=isset($_FILES['image1']['name'])?$_FILES['image1']['name']:'';
    $img2=isset($_FILES['image2']['name'])?$_FILES['image2']['name']:'';
    $img3=isset($_FILES['image3']['name'])?$_FILES['image3']['name']:'';
    $img4=isset($_FILES['image4']['name'])?$_FILES['image4']['name']:'';

	//Database stuff
	include_once("../config.php"); //connection 
    move_uploaded_file($_FILES['image1']['tmp_name'], $folder.$img1);
    move_uploaded_file($_FILES['image2']['tmp_name'], $folder.$img2);
    move_uploaded_file($_FILES['image3']['tmp_name'], $folder.$img3);
    move_uploaded_file($_FILES['image4']['tmp_name'], $folder.$img4);

	$query="SELECT * FROM tblpro_gallery WHERE id='$pro_id' ";
	$testresult=mysqli_query($connect,$query) or die("Error, query failed...");
	if(mysqli_fetch_array($testresult) == NULL ){
		//insert
		$query="INSERT INTO tblpro_gallery(id,image1,image2,image3,image4)
				VALUES('$pro_id','$img1','$img2','$img3','$img4')";
		$result=mysqli_query($connect,$query) or die("Error, query failed insert...");
		//echo "Insert recom successfully";
		include_once("index.php");
	}else{
		//update
		$query="UPDATE tblpro_gallery SET id='$pro_id',image1='$img1',image2='$img2',image3='$img3',image4='$img4' WHERE id='$pro_id'";
		$result=mysqli_query($connect,$query) or die("Error, query failed update...");
		//echo "Update data successfully";
		include_once("index.php");
	}
	
