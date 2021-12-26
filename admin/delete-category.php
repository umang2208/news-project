<?php
if(($_SESSION["user_role"])=='0'){
    header("location:post.php");
}
include 'config.php';
if($_SESSION["user_role"]==0){
    header("Location: post.php");
}
$cat_id=$_GET["id"];
$sql="DELETE FROM category WHERE category_id='{$cat_id}'";
if(mysqli_query($conn,$sql)){
    header("location:category.php");
}
mysqli_close($conn);
?>
