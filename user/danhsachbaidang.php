<?php 
include"lib/dbcon.php";
if(!isset($_SESSION["Id"])){
                            header("location:index.php");
                            }
                            $id=($_SESSION["Id"]);
                            settype($id,"int");
                            $sql="SELECT * FROM tbltin WHERE Iduser=$id";
                            $query_danhsach=mysqli_query($con,$sql);

                            ?>
<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="single-post-new">
            <div class="content-single-news">
                <h3>Danh sách bài viết</h3>
                <article class="post-content">
                    <div class="form-dat-bai">
                        <table class="table table-hover table-border" id="list-post">
                            <thead>
                                <th>Mã tin</th>
                                <th>Tiều đề</th>
                                <th>Ngày đăng</th>
                                <th>Tác vụ</th>
                            </thead>
                            <tbody>
                            <?php while($row_danhsach=mysqli_fetch_array($query_danhsach)){
                                
                                ?>
                            
                            
                                <tr>
                                    <td><?php echo $row_danhsach['Idtin'] ?></td>
                                    <td><a href="index.php?p=chitiettin&idtin=<?php echo $row_danhsach['Idtin'] ?>"><?php echo $row_danhsach['Tieude'] ?></a></td>
                                    <td><?php echo $row_danhsach['Ngaydang'] ?></td>
                                    <td>
                                        <a href="index.php?p=suabai&idtin=<?php echo $row_danhsach['Idtin'] ?>">Sửa</a> |
                                        <a href="user/xulyxoabai.php?d=<?php echo $row_danhsach['Idtin'] ?>">Xóa</a>
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