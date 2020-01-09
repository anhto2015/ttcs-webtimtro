<?php 
include"lib/dbcon.php";

$sql="SELECT * FROM tbltin INNER JOIN tblphuong ON tbltin.Idphuong=tblphuong.Idphuong 
    order by Idtin desc 
    " ;   
    $query_tinmoi= mysqli_query($con,$sql);
        
    $row_lt=mysqli_fetch_array($query_tinmoi);


?>  
<!-- start-content-left -->
<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="block-reals">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" class="nav-link active">Mới nhất</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane i-container active" id="new">
                    <div class="list-reals">
                        <!-- thong-tin -->

                        <?php 
                                                    
                        while($row_tintheoloai =mysqli_fetch_array($query_loaitin)){
                        ?>
                        <div class="detail-list">
                            <a href="index.php?p=chitiettin">
                                <img src="image/info/<?php echo $row_tintheoloai['Anh'] ?>" >
                            </a>
                            <div class="info-real">
                                <h4>
                                    <a href="index.php?p=chitiettin&idtin=<?php echo $row_tintheoloai['Idtin'] ?>"><?php echo $row_tintheoloai['Tieude'] ?></a>
                                </h4>
                                <p class="info-text-reals">
                                <?php echo $row_tintheoloai['Noidung'] ?>
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <p>
                                                <i class="fa fa-usd">  </i> Giá:
                                                <strong><?php echo $row_tintheoloai['Gia'] ?>/ Tháng</strong>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <p>
                                                <i class="fa fa-map-o">
                                                                                    
                                                                                    
                                                                                </i> Diện tích:
                                                <strong><?php echo $row_tintheoloai['Dientich'] ?>m
                                                                                        <sup>2</sup>
                                                                                    </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="fa fa-map-marker"></i>
                                    <span>
                                                                Khu vực
                                                                <strong><?php echo $row_tintheoloai['Tenphuong'] ?></strong>
                                                            </span>
                                    <span class="date-right"><?php echo $row_tintheoloai['Ngaydang'] ?></span>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end-thongtin -->
                        
                                                    <?php }?>


                    </div>
                    <div class="more">
                        <!-- <a href="#">Xem tất cả</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-content-left -->