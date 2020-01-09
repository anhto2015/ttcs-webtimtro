<?php 
include"../lib/dbcon.php";
    if(isset($_GET["d"])){
        $idtin=$_GET["d"];
        settype($idtin,"int");
    }
    if(isset($_GET["t"])){
        $tinhot=$_GET["t"];
        settype($tinhot,"int");
    }
    
    if ($tinhot==0) {
        $sql="UPDATE `tbltin` SET `Tinhot` = b'1' WHERE `tbltin`.`Idtin` = $idtin" ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qlbd")    ;
    } else {
        $sql="UPDATE `tbltin` SET `Tinhot` = b'0' WHERE `tbltin`.`Idtin` = $idtin" ;   
        mysqli_query($con,$sql);
        header("location: ../index.php?p=qlbd");
    }
    
    
    
?>