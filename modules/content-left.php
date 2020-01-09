<?php 
include"lib/dbcon.php";
    $sql=" SELECT * FROM tbltin ORDER BY Idtin  DESC LIMIT 0,5" ;   
    $query= mysqli_query($con,$sql);


?>  
                    <!-- start-content-left -->
                        <div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
                            <div class="content">
                                <div class="block-reals">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="index.php?p=tinmoi" class="nav-link active">Mới nhất</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link ">Phòng cho thuê</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Ở ghép</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane i-container active" id="new">
                                            <div class="list-reals">
                                                <!-- thong-tin -->
                                                <?php 
                                                    
                                                    while($row_namtinmoi =mysqli_fetch_array($query)){
                                                ?>
                                                <div class="detail-list">
                                                    <a href="index.php?p=chitiettin&idtin=<?php echo $row_namtinmoi['I  dtin'] ?>">
                                                        <img src="image/info/<?php echo $row_namtinmoi['Anh'] ?>" alt="">
                                                    </a>
                                                    <div class="info-real">
                                                        <h4>
                                                            <a href="index.php?p=chitiettin&idtin=<?php echo $row_namtinmoi['Idtin'] ?>"><?php echo $row_namtinmoi['Tieude'] ?></a>
                                                        </h4>
                                                        <p class="info-text-reals">
                                                        <?php echo $row_namtinmoi['Noidung'] ?>
                                                        </p>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <p>
                                                                        <i class="fa fa-usd">  </i> Giá:
                                                                        <strong><?php echo $row_namtinmoi['Gia'] ?>đ/ Tháng</strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                    <p>
                                                                        <i class="fa fa-map-o">
                                                                                    
                                                                                    
                                                                                </i> Diện tích:
                                                                        <strong><?php echo $row_namtinmoi['Dientich'] ?>m
                                                                                        <sup>2</sup>
                                                                                    </strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <i class="fa fa-map-marker"></i>
                                                            <span>
                                                                Địa chỉ:
                                                                <strong><?php echo $row_namtinmoi['Diachi'] ?></strong>
                                                            </span>
                                                            <span class="date-right"><?php echo $row_namtinmoi['Ngaydang'] ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                
                                                <!-- end-thongtin -->
                                                    <?php }
                                                     ?>
                                                
                                                
                                                
                                                
                                            </div>
                                            <div class="more">
                                                <a href="index.php?p=tinmoi">Xem tất cả</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end-content-left -->
                        