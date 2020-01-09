<?php 
include"../lib/dbcon.php";
    if(isset($_GET["d"])){
        $iduser=$_GET["d"];
        settype($iduser,"int");
        echo $iduser;
    }
    if(isset($_GET["t"])){
        $quyen=$_GET["t"];
        settype($quyen,"int");
        echo $quyen;
    }
    
    if ($quyen==0) {
        $sql="UPDATE `tbluser` SET `Quyen` = b'1' WHERE `tbluser`.`Iduser` = $iduser       " ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qltk")    ;
    } else {
        $sql="UPDATE `tbluser` SET `Quyen` = b'0' WHERE `tbluser`.`Iduser` = $iduser        " ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qltk");
    }
    
    
    
?>