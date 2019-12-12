<?php 
include"lib/dbcon.php";
if(isset($_GET["loaitin"])){
    $loaitin=$_GET["loaitin"];
    settype($loaitin,"int");
}
else{
    $loaitin=1;
}
//Thong tin theo loai tin
    $sql="SELECT * FROM tbltin INNER JOIN tblphuong ON tbltin.Idphuong=tblphuong.Idphuong
     where Malt=$loaitin 
     order by Idtin desc
    " ;   
    $query_loaitin= mysqli_query($con,$sql);
//Ten loai tin
    $lt="select * from tblloaitin where Malt='$loaitin'";
    $query_tin=mysqli_query($con,$lt);
    $row_lt=mysqli_fetch_array($query_tin);


?>  
<!-- start-content-left -->
<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="block-reals">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php?p=tintheoloai&loaitin=1" class="nav-link active"><?php echo $row_lt['Tenlt'] ?></a>
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
                        <a href="#">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end-content-left -->