<?php  
include"../lib/dbcon.php";

if(isset($_GET["iduser"])){
    $id=$_GET["iduser"];
    settype($id,"int");
    
}

function random_name(){
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen( $chars );
$str="";
for( $i = 0; $i < 5; $i++ ) {
$str =$str.$chars[ rand( 0, $size - 1 )];
 }
 return $str;
}

//////////////////////////////
if(isset($_POST["btn_submit"])){
$name=random_name().$_FILES["avatar"]["name"];
move_uploaded_file($_FILES["avatar"]["tmp_name"],"../image/info/$name");
$tieude=$_POST["tieude"];
$noidung=$_POST["noidung"];
$dientich=$_POST["dientich"];settype($dientich,"int");
$loaitin=$_POST["loaitin"];settype($loaitin,"int");
$khuvuc=$_POST["khuvuc"];settype($khuvuc,"int");
$diachi=$_POST["diachi"];
$gia=$_POST["gia"];settype($gia,"int");
$sdt=$_POST["sdt"];
$lienhe=$_POST["lienhe"];
$date=date('Y-m-d');
$themmoi="INSERT INTO tbltin (`Idtin`, `Tieude`, `Noidung`, `Sdt`, `Ngaydang`, `Malt`, `Iduser`, `Idphuong`, `Gia`, `Dientich`, `Diachi`, `Anh`, `Tinhot`, `Thongtinlh`) 
VALUES (NULL, '$tieude','$noidung',$sdt , '$date', $loaitin, $id, '$khuvuc', $gia, $dientich, '$diachi', '$name', 0, '$lienhe')";
mysqli_query($con,$themmoi);

$sqlidtin="SELECT * FROM `tbltin` WHERE Iduser=$id ORDER BY Idtin DESC LIMIT 0,1";
$query=mysqli_query($con,$sqlidtin);
$row_id=mysqli_fetch_array($query);
$idtin=$row_id['Idtin'];

/////////
/////anh////
foreach($_FILES['hinh']['name'] as $key=>$value){
    $image_name=random_name().$_FILES['hinh']['name'][$key];
    $tmp_name=$_FILES['hinh']['tmp_name'][$key];

    $target_dir="../image/info/";
    $target_file=$target_dir.$image_name;
    move_uploaded_file($tmp_name,$target_file);
    
    $themanh="INSERT INTO tblanh (Idanh, Idtin, Lienket) VALUES (NULL,$idtin, '$image_name')";
    mysqli_query($con,$themanh);
}

header('location:../index.php?p=danhsachbaidang');
}    
?>