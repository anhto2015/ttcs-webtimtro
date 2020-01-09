
<?php 
include"lib/dbcon.php";
if(!isset($_SESSION["Id"])){
                            header("location:index.php");
                            }
                            
                            $sql="SELECT * FROM `tbluser` ";
                            $query_danhsach=mysqli_query($con,$sql);

                            ?>

<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="single-post-new">
            <div class="content-single-news">
                <h3>Danh sách người dùng</h3>
                <article class="post-content">
                    <div class="form-dat-bai">
                        <table class="table table-hover table-border" id="list-post">
                            <thead>
                                <th>Id user</th>
                                <th>Tài khoản</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Quyền</th>
                                <th>Tác vụ</th>
                                
                            </thead>
                            <tbody>
                            <?php while($row_danhsach=mysqli_fetch_array($query_danhsach)){
                                
                                ?>
                            
                                <tr>
                                    <td>
                                    <?php echo $row_danhsach['Iduser'] ?>
                                    </td>
                                    <td>
                                    <?php echo $row_danhsach['Taikhoan'] ?>
                                    </td>
                                    <td>
                                    <?php echo $row_danhsach['Hoten'] ?>
                                    </td>
                                    <td>
                                    <?php echo $row_danhsach['Sdt'] ?>
                                    </td>
                                    <td>
                                    <?php echo $row_danhsach['Quyen'] ?>
                                    </td>
                                    <td>
                                    <a href="admin/xoataikhoan.php?d=<?php echo $row_danhsach['Iduser'] ?>">Xóa ||</a>
                                     <a href="admin/quyenhan.php?t=<?php echo $row_danhsach['Quyen'] ?>&&d=<?php echo $row_danhsach['Iduser'] ?>">Admin</a>
                                    </td>
                                    
                                    
                                </tr>
                            <?php }?>
                                
                            </tbody>
                        </table>
                    </div>
                </article>



            </div>
        </div>

    </div>
</div>