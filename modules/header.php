<?php 
ob_start();?>
<!-- start-header -->
<header>
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xs-7 col-sm-7 col-md-6 col-lg-6">
                            <div class="top-left pull-left">
                                <p>
                                    <span>
                                        <i class="fa fa-phone"></i>
                                        0999 666 999
                                    </span>
                                    <span>
                                        <i class="fa fa-envelope">
                                            timtrotpvinh@gmail.com.vn
                                        </i>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-xs-5 col-sm-5 col-md-6 col-lg-6">
                            <div class="top-right pull-right">
                        <!-- include-user -->
                        <?php if(!isset($_SESSION["Id"])){
                            require"modules/login-header.php";
                        }
                        else{
                            if($_SESSION["Quyen"]==0){
                            require"modules/user-header.php";}
                            else {
                                require"modules/admin-header.php";}
                            }?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-header">
                <div class="container">
                    <div class="logo">
                        <a href="index.php">
                            <img src="image/logo.png" alt="Phòng trọ tp Vinh">
                        </a>
                    </div>
                    <div class="top-menu">
                        <ul class="main-nav">
                            <li class="menu-item-1">
                                <a href="index.php">Trang chủ</a>
                            </li>
                            <li class="menu-item-2">
                                <a href="index.php?p=tintheoloai">Phòng trọ</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-10">
                                        <a href="index.php?p=tintheoloai&loaitin=1">Phòng cho thuê</a>
                                    </li>
                                    <li class="menu-item-10">
                                        <a href="index.php?p=tintheoloai&loaitin=2">Ở ghép</a>
                                    </li>
                                    <li class="menu-item-10">
                                        <a href="index.php?p=tintheoloai&loaitin=3">Chung cư mini</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-3">
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li class="menu-item-4">
                                <a href="#footer">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="button-submit">
                        <a href="index.php?p=dangbai">Đăng tin</a>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </header>
        <!-- end-header -->