<?php 
    $folder="../images/";
    $name=isset($_POST['txtname'])?$_POST['txtname']:'';
    $img=isset($_FILES['files']['name'])?$_FILES['files']['name']:'';
    $price=isset($_POST['txtprice'])?$_POST['txtprice']:'';
    $cate=isset($_POST['txtcate'])?$_POST['txtcate']:'';

include_once('../config.php');
move_uploaded_file($_FILES['files']['tmp_name'], $folder.$img);

$sql = "INSERT INTO tbl_product(name,image,price,category) VALUES('$name','$img','$price','$cate')";
$retval = mysqli_query($connect,$sql);
if(!$retval)
{
    die('Could not add data: '.mysqli_error($connect));
}
//echo "Add data successful...\n";
include_once('index.php');
      mysqli_close($connect);
?>