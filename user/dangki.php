<?php 
include"lib/dbcon.php";
if(isset($_POST["submit"])){
    $tendangnhap=$_POST["tendangnhap"];
    $hoten=$_POST["hoten"];
    $sdt=$_POST["sdt"];settype($sdt,"int");
    $pw=$_POST["pw"];
    $pw=md5($pw);
    echo $tendangnhap;
    echo $hoten;
    echo $sdt;
    echo $pw;
    $query="INSERT INTO `tbluser` (`Iduser`, `Taikhoan`, `Matkhau`, `Hoten`, `Sdt`, `Quyen`) 
    VALUES (NULL, '$tendangnhap', '$pw', '$hoten', $sdt, 0)";
    $sql="SELECT * FROM `tbluser` WHERE Taikhoan='$tendangnhap'";
    $kt=mysqli_query($con,$sql);
    if(mysqli_num_rows($kt)>0){
        ?>
<script>var message = 'Đăng kí thất bại, vui lòng kiểm tra lại';
alert(message);</script>
      <?php  
    }
    else {
        $kt=mysqli_query($con,$query);
        ?>
        <script>var message = 'Đăng kí thành công';
alert(message);</script>

        <?php
    }
    
} ?>

<!-- start-content -->
                <div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
                    <div class="content">
                        <div class="single-post-new">
                            <div class="content-single-news">
                                <h3>Đăng kí</h3>
                                <article class="post-content">
                                    <div class="login">
                                        <div class="dangkitaikhoan">
                                            <form action="" name="dangkiform" id="loginform" method="POST">
                                                <div class="form-group">
                                                    <label class="control-label" for="username">Tên đăng nhập
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="text" name="tendangnhap" id="user_login" class="input" value size="20">
                                                </div>
                                                <div class="form-group" for="email">
                                                    <label for="user-login" class="control-label">Họ tên
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="text" name="hoten" id="user_login" class="input" value size="20">
                                                </div>
                                                <div class="form-group" for="email">
                                                    <label for="user-login" class="control-label">Số điện thoại
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="text" name="sdt" id="user_login" class="input" value size="20">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user-pass" class="control-label">Mật khẩu
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