<?php
include"../lib/dbcon.php";
 if(isset($_GET["d"])){
        $iduser=$_GET["d"];
        settype($iduser,"int");
        $query1="DELETE FROM `tbltin` WHERE `tbltin`.`Idtin` = $iduser";
        mysqli_query($con,$query1);
       $query2="DELETE FROM `tbluser` WHERE `tbluser`.`Iduser`=$iduser" ;
       mysqli_query($con,$query2);
       header("location: ../index.php?p=qltk");
    }?> 