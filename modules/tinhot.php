<?php 
include"lib/dbcon.php";
$sql = "SELECT * FROM tbltin INNER JOIN tblphuong ON tbltin.Idphuong=tblphuong.Idphuong WHERE tbltin.Tinhot=1 LIMIT 0,6";
$query=mysqli_query($con,$sql);
?>

<!-- start-tin-hot -->
<div class="featured">
                <div class="container">
                    <div class="title-ve">
                        <h3>
                            <span>Tin đăng nổi bật</span>
                        </h3>
                    </div>
                    <div class="content-featured">
                        <div class="row">
                            
                            <?php while($row_tinhot=mysqli_fetch_array($query))
                            {

                            
                            ?>
                            <div class="col-sm-12 col-md-6 col-xs-12 col-lg-6">
                                <div class="detail-list">
                                    <div class="img-bds">
                                        <a href="index.php?p=chitiettin&idtin=<?php echo $row_tinhot['Idtin'] ?>">
                                            <img src="image/info/<?php echo $row_tinhot['Anh'] ?>" alt="">

                                        </a>
                                        <span>HOT</span>
                                    </div>
                                    <div class="info-real">
                                        <h4><a href="index.php?p=chitiettin&idtin=<?php echo $row_tinhot['Idtin'] ?>"><?php echo $row_tinhot['Tieude'] ?></a></h4>
                                        <p>
                                            <i class="fa fa-usd">  </i> Giá:
                                            <strong><?php echo $row_tinhot['Gia'] ?>đ/ Tháng</strong>
                                        </p>

                                        <p>
                                            <i class="fa fa-map-o">
                                                
                                                
                                            </i> Diện tích:
                                            <strong><?php echo $row_tinhot['Dientich'] ?>m
                                                    <sup>2</sup>
                                                </strong>
                                        </p>
                                        <p>
                                            <i class="fa fa-map-marker">
                                                
                                            </i>
                                            <span>
                                                    Khu vực:
                                                    <strong><?php echo $row_tinhot['Tenphuong'] ?></strong>
                                                </span>
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- end-tin-hot -->