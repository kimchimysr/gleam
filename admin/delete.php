<?php
include_once('../config.php');
$id1=$_GET['ProID'];
$sql= "DELETE FROM `tbl_product` WHERE `tbl_product`.`id` = '$id1'";
$result=mysqli_query($connect,$sql);

if(!$result){
	die('Could not delete...'.mysqli_error($connect));
}
//else echo "Successfully deleted...";
include_once('index.php');
?>