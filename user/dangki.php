<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font/css/font-awesome.min.css">
</head>

<body>
    <div class=wrapper>
    <?php include('../modules/header.php');
    ?>
    <!-- start-content -->
    <div class="content">
        <div class="main-content child-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
                        <div class="content">
                            <div class="single-post-new">
                                <div class="content-single-news">
                                    <h3>Đăng kí</h3>
                                    <article class="post-content">
                                        <div class="login">
                                            <div class="dangkitaikhoan">
                                                <form action="#" name="dangkiform" id="loginform" method="POST">
                                                    <div class="form-group">
                                                        <label class="control-label" for="username">Tên đăng nhập
                                                            <span class="required" style="color:#e00">*</span>
                                                        </label>
                                                        <input type="text" name="log" id="user_login" class="input" value size="20">
                                                    </div>
                                                    <div class="form-group" for="email">
                                                        <label for="user-login" class="control-label">Địa chỉ Email
                                                            <span class="required" style="color:#e00">*</span>
                                                        </label>
                                                        <input type="email" name="log" id="user_login" class="input" value size="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user-pass" class="control-label">Mật khẩu
                                                            <span class="required" style="color:#e00">*</span>
                                                        </label>
                                                        <input type="password" name="pw" id="user_pass" class="input" value size="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="user-pass" class="control-label">Nhập lại mật khẩu
                                                            <span class="required" style="color:#e00">*</span>
                                                        </label>
                                                        <input type="password" name="pw" id="user_pass" class="input" value size="20">
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" name="submit" class="btn btn-primary">Đăng kí</button>
                                                    </div>
                                                </form>
                                                <div class="clear-fix"></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end-content-left -->
                    <!-- start-content-right -->
                    <div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-3">
                        <div class="sidebar">
                            <!-- start-widget -->
                            <div class="widget">
                                <h3 class="title-w">
                                    <span>
                                                <i class="fa fa-bars"></i>
                                                Đăng tin miễn phí
                                            </span>

                                </h3>
                                <div class="content-view">
                                    <a href="#">
                                        <img src="../resources/image/dang-tin-mien-phi.jpg" alt="">
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget">

                                <div class="content-view">
                                    <a href="#">
                                        <img src="../resources/image/gia-dinh-nh.png" alt="">
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget">
                                <h3 class="title-w">
                                    <span>
                                                    <i class="fa fa-bars"></i>
                                                    Quảng cáo
                                                </span>

                                </h3>
                                <div class="content-view">
                                    <a href="#">
                                        <img src="#" alt="">
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget">
                                <h3 class="title-w">
                                    <span>
                                                        <i class="fa fa-facebook"></i>
                                                        Facebook
                                                    </span>

                                </h3>
                                <div class="content-page">

                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end-widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end-content -->
    
    </div>
    <?php include('../modules/footer.php')?>
</body>

</html>