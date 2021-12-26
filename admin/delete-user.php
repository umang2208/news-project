<?php
if(($_SESSION["user_role"])=='0'){
    header("location:post.php");
}
include "config.php";
$userid=$_GET['id'];
$sql="DELETE FROM user WHERE user_id={$userid}";
if(mysqli_query($conn,$sql)){
    header("Location: users.php");
}
else{
    echo "<p>can't delete the user record.</p>";
}
mysqli_close($conn);
?>