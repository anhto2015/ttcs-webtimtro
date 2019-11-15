
<?php  
session_start();
if(isset($_SESSION['Id']) && $_SESSION['Id'] != NULL){
    unset($_SESSION["Id"]);
    unset($_SESSION["Taikhoan"]);
    header("location: ../index.php");
}
?>