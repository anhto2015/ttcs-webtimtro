<?php 
if(!isset($_SESSION["Id"])){
                            header("location:index.php");
}?>
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
                                <tr>
                                    <td>1</td>
                                    <td>Cho thuê phòng khu vực P</td>
                                    <td>20/11/2019</td>
                                    <td>
                                        <a href="#">Sửa</a> |
                                        <a href="#">Xóa</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cho thuê phòng khu vực Phong Định cảng</td>
                                    <td>20/11/2019</td>
                                    <td>
                                        <a href="#">Sửa</a> |
                                        <a href="#">Xóa</a>
                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Cho thuê phòng khu vực Phong Định cảng</td>
                                    <td>20/11/2019</td>
                                    <td>
                                        <a href="#">Sửa</a> |
                                        <a href="#">Xóa</a>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>



            </div>
        </div>

    </div>
</div>