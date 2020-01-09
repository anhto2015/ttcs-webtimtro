

<?php //kiem tra dang nhap
include"lib/dbcon.php";
if(isset($_POST["submit"])){
    $un=$_POST["log"];
    $pw=$_POST["pw"];
    $pw=md5($pw);
    $qr=" select * from tblUser where Taikhoan='$un' and Matkhau='$pw'";
    $user=mysqli_query($con,$qr);
    if(mysqli_num_rows($user)==1){
        $row=mysqli_fetch_array($user);
        $_SESSION["Id"]=$row['Iduser'];
        $_SESSION["Taikhoan"]=$row['Taikhoan'];
        $_SESSION["Quyen"]=$row['Quyen'];
        header('location: index.php');
    }
    else{ ?>
<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
                        <div class="content">
                            <div class="single-post-new">
                                <div class="content-single-news">
                                    <h3>Đăng nhập</h3>
                                    <h4 class="thongbao">
                                        <?php echo'Tài khoản hoặc mật khẩu không chính xác';}}?>
                                    </h4>
                                    <article class="post-content">
                                        <div class="login">
                                            <div class="formdangnhap">
                                                <form action="index.php?p=dangnhap" name="loginform" id="loginform" method="POST">
                                                    <p class="login-username">
                                                        <label for="user-login">Nhập tên người dùng hoặc địa chỉ Email</label>
                                                        <input type="text" name="log" id="user_login" class="input" value size="20">
                                                    </p>
                                                    <p class="login-password">
                                                        <label for="user-pass">Mật khẩu</label>
                                                        <input type="password" name="pw" id="user_pass" class="input" value size="20">
                                                    </p>

                                                    <p class="login-submit">
                                                        <input type="submit" name="submit" id="submit" class="button button-primary" value="Đăng nhập">
                                                    </p>
                                                </form>
                                                <div class="pull-right">
                                                    <a href="index.php?p=dangki" title="Đăng kí">Đăng kí</a>
                                                </div>
                                                <div class="clear-fix"></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end-content-left -->