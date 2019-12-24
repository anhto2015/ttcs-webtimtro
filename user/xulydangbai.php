<?php  
$name=$_FILES["avatar"]["name"];
move_uploaded_file($_FILES["avatar"]["tmp_name"],"../image/info/$name");
?>