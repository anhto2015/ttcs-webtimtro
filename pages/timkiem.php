<?php 
include"../lib/dbcon.php";
if(isset($_GET["submit"])){
        $diachi=$_GET["diachi"];settype($diachi,"int");
        $loaitin=$_GET["loaitin"];settype($loaitin,"int");
        $gia=$_GET["gia"];settype($gia,"int");
        $dientich=$_GET["dientich"];settype($dientich,"int");
        
        switch($gia){
            case 0:$qrgia="";
            case 1:$qrgia="";
            case 2: $qrgia="and t.Gia<500000";break;
            case 3:$qrgia="and t.Gia BETWEEN 500000 AND 1000000";break;
            case 4:$qrgia="and t.Gia BETWEEN 1000000 AND 1500000";break;
            case 5:$qrgia="and t.Gia BETWEEN 1500000 AND 2000000";break;
            case 6:$qrgia="and t.Gia BETWEEN 2000000 AND 4000000";break;
            case 7: $qrgia="and t.Gia>4000000";break;
        }
        switch($dientich){
            case 0:$qrdientich="";
            case 1: $qrdientich="and t.Dientich<15";break;
            case 2:$qrdientich="and t.Dientich BETWEEN 15 AND 20";break;
            case 3:$qrdientich="and t.Dientich BETWEEN 20 AND 25";break;
            case 4:$qrdientich="and t.Dientich BETWEEN 25 AND 35";break;
            case 1: $qrdientich="and t.Dientich>35";break;
            

        }
        $query="SELECT * FROM tbltin AS t INNER JOIN tblloaitin as lt ON t.Malt=lt.Malt
         INNER join tblphuong as p on t.Idphuong=p.Idphuong WHERE t.Malt=$loaitin AND t.Idphuong=$diachi $qrgia $qrdientich";
        $query_timkiem=mysqli_query($con,$query);
        while($row_timkiem=mysqli_fetch_array($query_timkiem)){
        
        echo $row_timkiem["Tieude"];}
}

?>

<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="block-reals">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="index.php?p=tintheoloai&loaitin=$loaitin" class="nav-link active">Tìm Kiếm</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane i-container active" id="new">
                    <div class="list-reals">
                        <!-- thong-tin -->

                       
                        <div class="detail-list">
                            <a href="index.php?p=chitiettin">
                                <img src="image/info/" >
                            </a>
                            <div class="info-real">
                                <h4>
                                    <a href="index.php?p=chitiettin&idtin=</a>
                                </h4>
                                <p class="info-text-reals">
                                AAAAAA
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <p>
                                                <i class="fa fa-usd">  </i> Giá:
                                                <strong>33/ Tháng</strong>
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <p>
                                                <i class="fa fa-map-o">
                                                                                    
                                                                                    
                                                                                </i> Diện tích:
                                                <strong>22m
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
                                                                <strong>NO</strong>
                                                            </span>
                                    <span class="date-right"></span>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- end-thongtin -->
                        
                                                    


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

