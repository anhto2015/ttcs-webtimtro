<?php 
include"lib/dbcon.php";
    if(isset($_GET["idtin"])){
        $idtin=$_GET["idtin"];
        settype($idtin,"int");
    }
    else{
        $idtin=1;
    }
    $sql="SELECT * FROM tbltin INNER JOIN tblphuong on tbltin.Idphuong=tblphuong.Idphuong WHERE Idtin='$idtin'" ;   
    $query= mysqli_query($con,$sql);
    $row_tin=mysqli_fetch_array($query);

    $anh = "SELECT * FROM tblanh WHERE Idtin='$idtin'";
    $query_anh=mysqli_query($con,$anh);
    
?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
    <div class="title-single-reals">
        <div class="title-reals">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <h1><?php echo $row_tin['Tieude'] ?></h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <p>
                        <span>Ngày đăng</span>: <?php echo $row_tin['Ngaydang'] ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="content thongtin-phong">
                <div class="utility">
                    <h3>Thông tin</h3>
                    <div class="content-info-real">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Giá:</strong>
                                    <span class="color">
                                    <?php echo $row_tin['Gia'] ?>/tháng
                                                        </span>
                                </p>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Diện tích:</strong>
                                    <span class="color">
                                    <?php echo $row_tin['Dientich'] ?>m <sup>2</sup>
                                                        </span>
                                </p>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Khu vực:</strong>   
                                    <span class="color">
                                    <?php echo $row_tin['Tenphuong'] ?>
                                                        </span>
                                </p>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Địa chỉ:</strong>
                                    <span class="color">
                                    <?php echo $row_tin['Diachi'] ?>
                                                        </span>
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Mã tin:</strong>
                                    <span class="color">
                                                            <strong style="color:#e00"><?php echo $row_tin['Idtin'] ?></strong>
                                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content-text">
                    <h3>Chi tiết</h3>
                    <article class="post-content">
                        <p>
                        <?php echo $row_tin['Noidung'] ?>
                        </p>
                        <p>&nbsp;</p>
                        <p>
                        <img class="infoo" src="image/info/<?php echo $row_tin['Anh'] ?>" alt="">
                            <?php while($row_anh=mysqli_fetch_array($query_anh)){
                                
                                ?>
                            
                            <img class="infoo" src="image/info/<?php echo $row_anh['Lienket']; ?>" alt="">
                            <?php }?>

                        </p>
                        <p>&nbsp;</p>
                    </article>
                </div>
                <div class="utility">
                    <h3>Thông tin liên hệ</h3>
                    <div class="content-info-real">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Họ tên:</strong>
                                    <span class="color">
                                    <?php echo $row_tin['Thongtinlh'] ?>
                                                            </span>
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <p class="list-info">
                                    <i class="fa fa-angle-right"></i>
                                    <strong>Số điện thoại:</strong>
                                    <span class="color">0
                                    <?php echo $row_tin['Sdt'] ?>
                                                            </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="content-text"></div>
            </div>
        </div>
    </div>
</div>