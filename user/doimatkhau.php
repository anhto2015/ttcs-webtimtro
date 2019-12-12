<!-- start-content -->
<?php 
include"lib/dbcon.php";
if(!isset($_SESSION["Id"])){
                            header("location:index.php");
}
$iduser=($_SESSION["Id"]);
if(isset($_POST["submit"])){
    $pwold=$_POST["pwold"];
    $pwold=md5($pwold);
    $qr_ktmatkhau=mysqli_query($con,"SELECT * FROM tbluser WHERE Iduser=$iduser AND Matkhau='$pwold'");
    //
    $pw=$_POST["pwnew"];
    $pw=md5($pw);
    
    $query="UPDATE tbluser SET Matkhau = '$pw' WHERE tbluser.Iduser = $iduser limit 1";
    if(!$qr_ktmatkhau||mysqli_num_rows($qr_ktmatkhau)==0){
        ?>
        <h4 class="thongbao">
                                        <?php echo "Mật khẩu cũ không chính xác"; ?>
                                    </h4>
        <?php
    
    
    //
}else {
    mysqli_query($con,$query);?>
    <h4 class="thongbao">
                                        <?php echo "Đổi mật khẩu thành công"; }}?>
                                    </h4>

<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
                    <div class="content">
                        <div class="single-post-new">
                            <div class="content-single-news">
                                <h3>Đổi mật khẩu</h3>

                                

                                <article class="post-content">
                                    <div class="login">
                                        <div class="dangkitaikhoan">
                                            <form action="#" name="dangkiform" id="loginform" method="POST">
                                                <div class="form-group">
                                                    <label class="control-label" for="username">Mật khẩu cũ
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="password" name="pwold" id="user_login" class="input" value size="20">
                                                </div>

                                                <div class="form-group">
                                                    <label for="user-pass" class="control-label">Mật khẩu mới
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="password" name="pwnew" id="user_pass" class="input" value size="20">
                                                </div>
                                                <div class="form-group">
                                                    <label for="user-pass" class="control-label">Nhập lại mật khẩu mới
                                                        <span class="required" style="color:#e00">*</span>
                                                    </label>
                                                    <input type="password" name="r_pwnew" id="user_pass" class="input" value size="20">
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="submit" class="btn btn-primary">Đổi mật khẩu</button>
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