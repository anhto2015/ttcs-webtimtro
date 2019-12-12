<?php if(isset($_GET["d"])){
        $idtin=$_GET["d"];
        settype($idtin,"int");
       $query="DELETE FROM tbltin WHERE tbltin.Idtin = $idtin" ;
       header("location: index.php?p=danhsachbaidang");
    }?>