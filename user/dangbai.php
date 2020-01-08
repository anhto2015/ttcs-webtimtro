<?php 
if(!isset($_SESSION["Id"])){
                            header("location:index.php?p=dangnhap");
}
$id=($_SESSION["Id"]);
settype($id,"int");
echo date('Y-m-d');

///header('location:../index.php');
 ?>

<div class="col-xs-12 col-col-md-12 col-sm-12 col-lg-9">
    <div class="content">
        <div class="single-post-new">
            <div class="content-single-news">
                <h3>Đăng tin phòng trọ</h3>
                <article class="post-content">
                    <form action="user/xulydangbai.php?iduser=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <!-- tieude -->
                            <div class="col-lg-12">
                                <div class="item">
                                    <label for="">
                            Tiêu đề
                            <span style="color: red">(*)</span>
                            </label>
                                    <div class="item-input">
                                        <input type="text" class="form-control" name="tieude" placeholder="Cho thuê ở đâu??">
                                    </div>
                                </div>
                            </div>
                            <!-- end-tieude -->
                            <div class="col-lg-12">
                                <div class="item">
                                    <label for="">
                            Nội dung
                            <span style="color: red">(*)</span>
                            </label>
                                    <div class="item-input">
                                        <textarea name="noidung" id=""class="form-control" placeholder="Mô tả thông tin,tiện ích,phòng,hướng...."></textarea>

                                    </div>
                                </div>
                            </div>
                            <!-- end-noidung -->
                            <div class="col-lg-6">
                                <div class="item">
                                    <label for="">
                            Loại tin
                            <span style="color: red">(*)</span>
                            </label>
                                    <div class="item-input">
                                        <select name="loaitin" id="input" class="form-control" required="required">
                                            <option value="">Loại Tin</option>
                                            <option value="1">Phòng Trọ</option>
                                            <option value="2">Ở Ghép</option>
                                            <option value="3">Chug cư mini</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <label for="">
                            Khu vực 
                            <span style="color: red">(*)</span>
                            </label>
                                    <div class="item-input">
                                        <select name="khuvuc" id="input" class="form-control" required="required">
                                            <option value="">Chọn Phường</option>
                                            <option value="10">Bến Thủy</option>
                                            <option value="11">Cửa Nam</option>
                                            <option value="12">Đội Cung</option>
                                            <option value="13">Đông Vĩnh</option>
                                            <option value="14">Hà Huy Tập</option>
                                            <option value="15">Hồng Sơn</option>
                                            <option value="16">Hưng Bình</option>
                                            <option value="17">Hưng Dũng</option>
                                            <option value="18">Hưng Phúc</option>
                                            <option value="19">Lê Lợi</option>
                                            <option value="20">Lê Mao</option>
                                            <option value="21">Quán Bàu</option>
                                            <option value="22">Quang Trung</option>
                                            <option value="23">Trung Đô</option>
                                            <option value="24">Trường Thi</option>
                                            <option value="25">Vinh Tân</option>
                                            <option value="26">Hưng Chính</option>
                                            <option value="27">Hưng Đông </option>
                                            <option value="28">Hưng Hòa </option>
                                            <option value="29">Hưng Lộc</option>
                                            <option value="30">Nghi Ân</option>
                                            <option value="31">Nghi Kim</option>
                                            <option value="32">Nghi Đức</option>
                                            <option value="33">Nghi Liên</option>
                                            <option value="34">Nghi Phú</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item">
                                    <label for="">
                            Diện tích
                            
                            </label>
                                    <div class="item-input">
                                        <input type="text" class="form-control" name="dientich" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Địa chỉ
                            <span style="color: red ">(*)</span>
                            </label>
                                    <div class="item-input ">
                                        <input type="text " class="form-control" name="diachi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Giá
                            
                            </label>
                                    <div class="item-input ">
                                        <input type="text " class="form-control" name="gia">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Số điện thoại
                            
                            </label>
                                    <div class="item-input ">
                                        <input type="text " class="form-control" name="sdt">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Thông tin liên hệ
                            
                            </label>
                                    <div class="item-input ">
                                        <input type="text " class="form-control" name="lienhe">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Ảnh đại diện(Hãy đăng ảnh để được nhiều người xem hơn)
                            
                            </label>
                                    <div class="item-input ">
                                        <input type="file" name="avatar">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 ">
                                <div class="item ">
                                    <label for=" ">
                            Ảnh
                            
                            </label>
                                    <div class="item-input ">
                                        <input type="file"  name="hinh[]" multiple>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                            <div class="more">
                                <input type="submit" value="Cập nhật" class="btnSubmit" name="btn_submit">
                            </div>
                            </div>
                        </div>


                    </form>
                </article>



            </div>
        </div>

    </div>
</div>