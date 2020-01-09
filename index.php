
<?php require"lib/dbcon.php";


session_start();?>

<?php 
if(isset($_GET["p"]))
      $p=$_GET["p"]; 
    else 
    $p="";  
    
      ?>    


<!DOCTYPE html>
<html lang=vi>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm trọ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    
</head>

<body>
    <div class="wrapper">
        <?php include('modules/header.php'); ?>
        <!-- start-content -->
              <div class="content">

                  <?php switch("$p"){
                  case "": 
                      include('modules/banner.php');
                       include('modules/tinhot.php');
                       include"modules/divmaincontent.php";
                        include"modules/content-left.php"; break;
                   case "dangnhap" :
                    include"modules/divmaincontent.php";
                  require"user/dangnhap.php"; break;

                  case "dangki" :
                    include"modules/divmaincontent.php";
                    include"user/dangki.php"; break;
                    case "chitiettin" :
                        include"modules/divmaincontent.php";
                        include"pages/chitiettin.php"; break;
                        case "tinmoi" :
                            include"modules/divmaincontent.php";
                            include"pages/tinmoi.php"; break;
                            case "doimatkhau":
                                include"modules/divmaincontent.php";
                                include"user/doimatkhau.php"; break;
                                case "danhsachbaidang":
                                    include"modules/divmaincontent.php";
                                    include"user/danhsachbaidang.php"; break;
                                    case "dangbai":
                                        include"modules/divmaincontent.php";
                                        include"user/dangbai.php"; break;
                                        case "tintheoloai":
                                            include"modules/divmaincontent.php";
                                             include"pages/tintheoloai.php"; break;
                                             case "timkiem":
                                                include"modules/divmaincontent.php";
                                                 include"pages/timkiem.php"; break;
                                                 case "suabai":
                                                    include"modules/divmaincontent.php";
                                                 include"user/suabai.php"; break;
                                                 case "qlbd":
                                                    include"modules/divmaincontent.php";
                                                 include"admin/quanlybaidang.php"; break;
                                                 case "qltk":
                                                    include"modules/divmaincontent.php";
                                                 include"admin/quanlynguoidung.php"; break;
                                                 case "tinmoi":
                                                 include"modules/divmaincontent.php";
                                                 include"pages/tinmoinhat.php"; break;
                                                 case "tim":
                                                    include"modules/divmaincontent.php";
                                                    include"pages/timkiemtukhoa.php"; break;

                                                    
                                                




                  }
?>
                

      <?php include('modules/content-right.php') ?>
                </div>
            </div>
        </div>
    </div>
    
        <?php include('modules/footer.php');?>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="js/js.js"></script>
    </div>

</body>

</html>