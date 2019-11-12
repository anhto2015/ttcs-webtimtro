<!DOCTYPE html>
<html lang=vi>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tìm trọ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">





</head>

<body>
    <div class="wrapper">
        <?php
        include('modules/header.php');?>
<?php include('modules/banner-search.php'); ?>

    
        <!-- start-content -->
<div class="content">

<div class="main-content">
                <div class="container">
                    <div class="row">

              <?php include('modules/content.php');
                  include('modules/content-right.php'); ?>
                    </div>
                </div>
            </div>
        
        <!-- end-content -->
</div>
        
        <?php include('modules/footer.php');?>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery-3.4.1.min.js"></script>
            <script src="js/js.js"></script>
    </div>

</body>

</html>